<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortalRegister;
use App\Portal;
use App\PortalData;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class APIController extends Controller {

    public function recordPortalData(Request $request)
    {
        if($request->user()->hasPortal() && ($request->data['referrer'] == $request->user()->portal->url)) {
            $data = PortalData::create([
                'portal_id'   => $request->user()->portal->id,
                'time_period' => Carbon::now()->startOfMonth()->subMonth(1),
                'data'        => $request->data,
            ]);

            $request->user()->portal()->update(['callback' => true]);

            return response()->json(['code' => 200, 'message' => 'ok']);
        }

        return response()->json([
            'code'    => 404,
            'message' => 'Portal not found',
        ]);
    }

    public function register(Request $request)
    {
        return $request->data['name'];

        $client = $this->getClientInfo($request);

        if(!$client->hasRole('client')) {
            $client->assignRole('client');
        }

        $token = $client->createToken($request->data['referrer'], ['portal-data']);

        $this->createPortal($client, $request, $token);

        return response()->json([
            'access_token' => $token->accessToken,
        ]);
    }

    public function createPortal($client, $request, $token)
    {
        Portal::create([
            'client_id'    => $client->fresh()->id,
            'url'          => $request->data['referrer'],
            'access_token' => $token->accessToken,
        ]);

    }

    public function getClientInfo($request)
    {
        $client = User::firstOrNew(['email' => $request->data['email']]);
        $client->name = $request->data['name'];
        $client->password = bcrypt(Str::random(12));
        $client->save();

        return $client->fresh();
    }
}
