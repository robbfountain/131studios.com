<?php

namespace App\Listeners;

use App\Notifications\SendContractEmailToClient;
use App\User;
use Grosv\LaravelPasswordlessLogin\PasswordlessLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;
use InvoiceNinja\Config as NinjaConfig;
use InvoiceNinja\Models\Client;

class CreateUserAccount implements ShouldQueue
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
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        if (!User::where('email', $event->contract->email)->exists()) {
            User::create([
                'name' => $event->contract->name,
                'email' => $event->contract->email,
                'password' => bcrypt(Str::random(12)),
            ]);
        }

    }
}
