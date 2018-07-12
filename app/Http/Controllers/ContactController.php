<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\LongForm;
use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;
use App\User;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class ContactController extends Controller {

    /**
     * @param ShortContactForm $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ShortContactForm $request)
    {
        Mail::to('robb@131studios.com')->send(new ContactFormSubmitted($request));

        return response()->json([
            'status' => 'ok'
        ]);
    }

    /**
     * @param LongForm $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitForm(LongForm $request)
    {
        Contact::create($request->except(['newsletter']));

        Mail::to(User::contact()->get())->send(new ContactFormSubmitted($request, false));

        return response()->json([
            'status' => 'ok',
        ]);
    }

    /**
     * @return $this
     */
    public function longForm()
    {
        return view('frontend.longform')->with(['heading' => 'Contact Us']);
    }

    /**
     * @return $this
     */
    public function contact()
    {
        return view('frontend.contact')->with(['heading' => 'Contact Us']);
    }
}
