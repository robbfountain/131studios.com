<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\LongForm;
use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;
use App\User;
use Illuminate\Support\Facades\Mail;
use Newsletter;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller {

    public function index()
    {
        return view('frontend.contact')->with(['title' => 'Contact Us']);
    }

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
    public function quote(LongForm $request)
    {
        Contact::create($request->except(['newsletter']));

        Mail::to('robb@131studios.com')->send(new ContactFormSubmitted($request, false));

        return response()->json([
            'status' => 'ok',
        ],200);
    }
}
