<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\LongForm;
use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Newsletter;

class ContactController extends Controller
{
    public function sendMessage(ShortContactForm $request) 
    {
        if($request->newsletter == "true")
        {
            if(! Newsletter::hasMember($request->email))
            {
                Newsletter::subscribe($request->email);
            }
        }

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactFormSubmitted($request));

        return [
            'success'   =>  true,
            'message'   =>  'Your message has ben sent',
            'title'     =>  'Thank You',
            'type'  =>  'success',
        ];
    } // sendMessage

    public function submitForm(LongForm $request) 
    {
    	Contact::create(Request::all());

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactFormSubmitted($request, false));

    	return [
            'success'   =>  true,
            'message'   =>  'Your message has ben sent',
            'title'     =>  'Thank You',
            'type'  =>  'success',
        ];
    } // 
}
