<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class WebsiteDesignController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('frontend.website-design')->with([
            'title' => 'Website Design | 131 Studios',
        ]);
    }
}
