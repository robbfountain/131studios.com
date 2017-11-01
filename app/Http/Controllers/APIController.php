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
        if($request->user()->hasPortal())
        {
            return response()->json([
                'data' => $request->data,
            ],
                200);
        }
        if($request->user()->hasPortal() && ($request->data['referrer'] == $request->user()->portal->url)) {
            $data = PortalData::create([
                'portal_id'   => $request->user()->portal->id,
                'client_id'   => $request->user()->id,
                'time_period' => Carbon::now()->startOfMonth()->subMonth(1)->toDateTimeString(),
                'data'        => $request->data,
            ]);

            $request->user()->portal()->update(['callback' => true]);

            return response()->json(['called_at' => Carbon::now(), 'data' => $data], 200);
        }

        return response()->json([
            'message' => 'Portal not found',
        ],
            402);
    }

    public function register(PortalRegister $request)
    {
        $client = $this->getClientInfo($request);

        if(!$client->hasRole('client')) {
            $client->assignRole('client');
        }

        $token = $client->createToken($request->data['referrer'], ['portal-data']);

        $this->createPortal($client, $request, $token);

        return ['access_token' => $token->accessToken];
    }

    public function getClientInfo($request)
    {
        if($client = User::where('email', $request->data['email'])->first()) {
            return $client;
        }

        return User::create([
            'name'     => $request->data['name'],
            'email'    => $request->data['email'],
            'password' => bcrypt(Str::random(12)),
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
}
