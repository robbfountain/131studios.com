<?php

namespace App\Listeners;

use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;
use InvoiceNinja\Models\Client;

class AddClientToAccountingSoftware implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $name = Str::of($event->contract->user->name)->explode(' ');

        $client = new Client($event->contract->user->email, $name->first(), $name->last(), $event->contract->business_name);
        $client->save();

        User::where('email', $event->contract->user->email)
            ->first()
            ->update([
                'client_id' => $client->id,
            ]);
    }
}
