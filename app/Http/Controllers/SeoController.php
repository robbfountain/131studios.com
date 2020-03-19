<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class SeoController
 * @package App\Http\Controllers
 */
class SeoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.seo')->with([
            'title' => 'Search Engine Optimization - SEO | 131 Studios'
        ]);
    }
}
