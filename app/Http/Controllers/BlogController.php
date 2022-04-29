<?php

namespace App\Http\Controllers;

use App\Classes\BlogReader;
use App\Classes\Filters\Hidden;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
