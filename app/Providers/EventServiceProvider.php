<?php

namespace App\Providers;

use App\Events\ContractWasApproved;
use App\Events\ContractWasPublished;
use App\Listeners\AddClientToAccountingSoftware;
use App\Listeners\FetchS3Messages;
use App\Listeners\GenerateClientDepositInvoice;
use App\Listeners\SendClientContractNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use OneThirtyOne\Sns\Events\SnsEvent;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
