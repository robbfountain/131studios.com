<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\View\View;
use App\Classes\BlogReader;
use App\Classes\Filters\Hidden;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

/**
 * Class BlogController.
 */
class BlogController extends Controller
{
    /**
     * @var string
     */
    protected $titleSuffix = ' - 131 Studios Blog';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function __invoke(Request $request)
    {
        return view('frontend.blog.index')->with([
            'blogs' => BlogReader::fromFilesystem()->applyFilters([
                new Hidden,
            ])->desc()->get(),
        ]);
    }
}
