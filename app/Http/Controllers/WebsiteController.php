<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class WebsiteController extends Controller
{
	/**
	 * Constructor
	 */
    public function __construct() 
    {
    	//
    } // __construct

    public function index() 
    {
    	return view(env('THEME').'.index');
    } // index

    public function contact() 
    {
        return view(env('THEME').'.contact');
    } // contact

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
}
