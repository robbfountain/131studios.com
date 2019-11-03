<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

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
