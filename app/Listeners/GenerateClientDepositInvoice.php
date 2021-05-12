<?php

namespace App\Listeners;

use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;
use InvoiceNinja\Models\Client;

class GenerateClientDepositInvoice implements ShouldQueue
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
        $client = Client::find(
            User::where('email', $event->contract->user->email)->first()->client_id
        );

        $invoice = $client->createInvoice();
        $invoice->addInvoiceItem('CONSULTING', '**'.$event->contract->business_name."**\nConsulting services from 131 Studios", $event->contract->total_cost);
        $invoice->due_date = Carbon::parse($event->contract->ends_at)->format('Y-m-d');
        $invoice->partial = $event->contract->deposit;
        $invoice->partial_due_date = Carbon::now()->addDays(10)->format('Y-m-d');
        $invoice->private_notes = 'Invoice Auto-Generated from Signed Contract '.$event->contract->signed_url;
        $invoice->save();
    }
}
