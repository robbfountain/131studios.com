<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Testimonial;

/**
 * Class IndexController.
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index')->with(array_merge($this->title, [
            'blogs' => Blog::published()->latest('published_at')->take(3)->get(),
            'review' => Testimonial::all()->random(),
        ]));
    }
}
