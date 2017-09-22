<?php

namespace App\Http\Controllers;

use App\Models\License;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LicenseController extends Controller {

    public function activate(Request $request)
    {
        $request->validate([
            'data.license_key' => 'required|string',
        ]);

        if(!$license = License::where('license_key', $request->data['license_key'])->first())
            return response()->json(['status' => 'License Not Found'], 400);

        if($this->hasBeenActivated($license))
            return response()->json(['status' => 'License already activated'], 400);

        $license->activateAndVerify();

        return response()->json(['license' => $license]);
    }

    public function hasBeenActivated($license)
    {
        return $license->activated_at != null;
    }

    public function check(Request $request)
    {
        $request->validate([
            'data.license_key' => 'required|string',
        ]);

        if(!$license = License::where('license_key', $request->data['license_key'])->first())
            return response()->json(['status' => 'License Not Found'], 400);

        if($this->hasBeenActivated($license))
            $license->verify();
        else
            return response()->json(['status' => 'License not activated'], 402);

        return $this->hasExpired($license)
            ? response()->json(['status' => 'Subscription Expired'],
                402)
            : response()->json(['status' => 'ok', 'verified_at' => $license->fresh()->verified_at],
                200);
    }

    public function hasExpired($license)
    {
        return Carbon::now() > $license->expires_at;
    }
}
