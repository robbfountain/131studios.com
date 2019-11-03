<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\ContactRequest;
use App\Notifications\SendContactFormEmail;

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
        return view('frontend.contact')->with([
            'title' => 'Contact Us | 131 Studios',
        ]);
    }

    /**
     * @param ShortContactForm $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ContactRequest $request)
    {
        User::find(1)->notify(
            new SendContactFormEmail($request->validated())
        );

        return response()->json([], 204);
    }
}
