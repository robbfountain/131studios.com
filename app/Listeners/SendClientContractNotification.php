<?php

namespace App\Listeners;

use App\Notifications\NotifyUserOfPublishedContract;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
