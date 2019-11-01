<?php

namespace App\Http\Controllers;

use App\Blog;

class BlogController extends Controller
{
    protected $titleSuffix = ' - 131 Studios Blog';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.blog.index')->with([
            'title' => 'Our Blog | 131 Studios',
            'blogs' => Blog::published()->latest('published_at')->get()
        ]);
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
            'title' => $blog->title . $this->titleSuffix,
        ]);
    }
}
