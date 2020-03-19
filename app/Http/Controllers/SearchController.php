<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.blog.search')->with([
            'title' => 'Search Our Blog | 131 Studios',
            'heading' => 'Search',
            'categories' => Category::has('blog')->get(),
        ]);
    }
}
