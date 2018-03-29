<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \Illuminate\Http\Request
     */
    public $info;

    /**
     * @var bool
     */
    public $standard;

    /**
     * Create a new message instance.
     *
     * @param $info
     * @param bool $standard
     */
    public function __construct($info, $standard = true)
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
        return $this->standard
            ? $this->view('email.contact.contactform-html')->text('email.contact.contactform-plain')
            : $this->view('email.contact.contactformlong-html')->text('email.contact.contactformlong-plain');
    }
}
