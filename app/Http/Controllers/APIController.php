<?php

namespace App\Http\Controllers;

use App\PortalData;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
}
