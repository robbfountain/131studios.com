<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Notifications\SendContactFormEmail;
use Illuminate\Support\Facades\Notification;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact')->with([
            'title' => 'Contact Us | 131 Studios',
        ]);
    }

    /**
     * @param \App\Http\Requests\ContactRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ContactRequest $request)
    {
        Notification::route('mail', config('studios.contact_recipient'))
            ->notify(new SendContactFormEmail($request->validated()));

        return response()->json([], 204);
    }
}
