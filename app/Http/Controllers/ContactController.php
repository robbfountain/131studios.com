<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact')->with(['title' => 'Contact Us']);
    }

    /**
     * @param ShortContactForm $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ContactRequest $request)
    {
        Mail::to('robb@131studios.com')->send(new ContactFormSubmitted($request->validated()));

        return response()->json([
            'status' => 'ok',
        ]);
    }
}
