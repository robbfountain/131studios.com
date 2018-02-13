<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\LongForm;
use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class ContactController extends Controller {

    public function sendMessage(ShortContactForm $request)
    {
        if($request->newsletter == "true") {
            if(!Newsletter::hasMember($request->email)) {
                Newsletter::subscribe($request->email);
            }
        }

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactFormSubmitted($request));

        return [
            'success' => true,
            'message' => 'Your message has been sent',
            'title'   => 'Thank You',
            'type'    => 'success',
        ];
    }

    public function submitForm(LongForm $request)
    {
        Contact::create($request->except(['newsletter']));

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactFormSubmitted($request, false));

        return [
            'success' => true,
            'message' => 'Your message has been sent',
            'title'   => 'Thank You',
            'type'    => 'success',
        ];
    }

    public function longForm()
    {
        return view('frontend.longform')->with(['heading' => 'Contact Us']);
    } // longForm

    public function contact()
    {
        return view('frontend.contact')->with(['heading' => 'Contact Us']);
    }
}
