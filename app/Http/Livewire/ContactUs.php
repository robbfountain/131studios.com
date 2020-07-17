<?php

namespace App\Http\Livewire;

use App\Notifications\SendContactFormEmail;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10|string',
        ]);
    }

    public function sendEmail()
    {
        $validated = $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10|string',
        ]);

        Notification::route('mail', config('studios.contact_recipient'))
            ->notify(new SendContactFormEmail($validated));

        session()->flash('message', 'Message Sent, Thanks!');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
