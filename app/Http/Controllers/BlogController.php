<?php

namespace App\Http\Controllers;

use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::published()->latest('published_at')->get();
        return view('frontend.blog.index', compact('blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     *
     * @return view
     */
    public function show(Blog $blog)
    {
        return view('frontend.blog.show', compact('blog'))->with([
            'title' => $blog->title,
            'recent' => Blog::published()->latest('published_at')->take(10)->get()
        ]);
    }
}
