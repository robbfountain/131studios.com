<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Http\Requests\SubscriptionRequest;

class SubscriptionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionRequest $request)
    {
        Subscription::create(
            $request->validated()
        );

        return response()->json([], 204);
    }
}
