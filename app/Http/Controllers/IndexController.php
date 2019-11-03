<?php

namespace App\Http\Controllers;

use App\Blog;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index')->with(array_merge($this->title, [
            'blogs' => Blog::published()->latest('published_at')->take(4)->get(),
        ]));
    }
}
