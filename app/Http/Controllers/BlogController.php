<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Classes\BlogReader;
use App\Classes\Filters\Hidden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        return view('frontend.blog.index')->with([
            'blogs' => BlogReader::fromFilesystem()->applyFilters([
                new Hidden,
            ])->desc()->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $year
     * @param $month
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function show($year, $month, $slug)
    {
        if (Storage::disk('blogs')->exists("$year/$month/$slug.md")) {
            $blog = \App\Classes\Blog::getByPath("$year/$month/$slug.md");

            return view('frontend.blog.show', compact('blog'))->with([
                'title' => $blog->title.$this->titleSuffix,
            ]);
        }

        abort('404');
    }

    /**
     * @return mixed
     */
    private function getCategories()
    {
        return Category::has('blog')->get();
    }
}
