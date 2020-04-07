<?php

namespace App\Http\Controllers;

/**
 * Class SeoController.
 */
class SeoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.seo')->with([
            'title' => 'Search Engine Optimization - SEO | 131 Studios',
        ]);
    }
}
