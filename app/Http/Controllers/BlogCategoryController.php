<?php

namespace App\Http\Controllers;

use App\Classes\BlogReader;
use App\Classes\Filters\Category;
use App\Classes\Filters\Hidden;

class BlogCategoryController extends Controller
{
    public function __invoke($category)
    {
        return view('frontend.blog.index')->with([
            'blogs' => BlogReader::fromFilesystem()->applyFilters([
                new Hidden,
                new Category($category),
            ])->get(),
        ]);
    }
}
