<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class EmailHostingController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('frontend.email-hosting')->with([
            'title' => 'Email Hosting | 131 Studios',
        ]);
    }
}
