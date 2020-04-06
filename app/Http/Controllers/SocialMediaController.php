<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class SocialMediaController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('frontend.social-media')->with([
            'title' => 'Social Media | 131 Studios',
        ]);
    }
}
