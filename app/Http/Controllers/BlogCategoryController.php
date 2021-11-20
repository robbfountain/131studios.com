<?php

namespace App\Http\Controllers;

use App\Classes\BlogReader;
use Illuminate\Http\Request;
use App\Classes\Filters\Hidden;
use App\Classes\Filters\Category;

class BlogCategoryController extends Controller
{
    public function __invoke($category)
    {
        return view('frontend.blog.index')->with([
            'blogs' => BlogReader::fromFilesystem()->applyFilters([
                new Hidden,
                new Category($category)
            ])->get(),
        ]);
    }
}
