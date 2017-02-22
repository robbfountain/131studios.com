<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
    public $standard;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $info, $standard = true)
    {
        $this->info = $info;
        $this->standard = $standard;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->standard ? 
                $this->view('email.contact.contactform-html')->text('email.contact.contactform-plain') :
                $this->view('email.contact.contactformlong-html')->text('email.contact.contactformlong-plain');
    }
}
