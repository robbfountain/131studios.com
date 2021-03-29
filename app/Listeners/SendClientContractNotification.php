<?php

namespace App\Listeners;

use App\Notifications\NotifyUserOfPublishedContract;

class SendClientContractNotification
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
        $event->contract->user->notify(
            new NotifyUserOfPublishedContract($event->contract)
        );
    }
}
