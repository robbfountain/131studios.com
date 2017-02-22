<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\LongForm;
use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Spatie\Newsletter\Newsletter;

class ContactController extends Controller
{
    public function sendMessage(ShortContactForm $request) 
    {
        if($request->newsletter == "true")
        {
           if(! Newsletter::subscribe($request->email))
            {
                return [
                    'success' => true,
                    'message'   =>  Newsletter::getLastError(),
                    'title' =>  'Oops, something went wrong',
                    'type'  =>  'error',
                ];
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

    	return [
            'success'   =>  true,
            'message'   =>  'Your message has ben sent',
            'title'     =>  'Thank You',
            'type'  =>  'success',
        ];
    } // 
}
