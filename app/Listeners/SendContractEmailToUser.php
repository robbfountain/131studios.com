<?php

namespace App\Listeners;

use App\Notifications\SendContractEmailToClient;
use App\User;
use Grosv\LaravelPasswordlessLogin\PasswordlessLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class SendContractEmailToUser
 * @package App\Listeners
 */
class SendContractEmailToUser implements ShouldQueue
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
        $user = User::where('email', $event->contract->email)->first();

        $user->notify(
            new SendContractEmailToClient(
                $event->contract, $this->getLoginUrl($user, $event->contract->signed_url)
            )
        );
    }

    /**
     * @param $user
     * @param $signed_url
     * @return string
     */
    public function getLoginUrl($user, $signed_url)
    {
        return PasswordlessLogin::forUser($user)
            ->setRedirectUrl($signed_url)
            ->generate();
    }
}
