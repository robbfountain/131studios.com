<?php

namespace App\Mail;

use App\Models\License;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LicenseKeyGenerated extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var License
     */
    public $license;

    /**
     * Create a new message instance.
     *
     * @param License $license
     */
    public function __construct(License $license)
    {
        $this->license = $license;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.license.license-key');
    }
}
