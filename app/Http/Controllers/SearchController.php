<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
