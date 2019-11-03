<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        return view('frontend.seo')->with([
            'title' => 'Search Engine Optimization - SEO | 131 Studios'
        ]);
    }
}
