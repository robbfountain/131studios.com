<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Classes\BlogReader;
use Illuminate\Http\Request;
use App\Classes\Filters\Hidden;
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
            ])->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Blog  $blog
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
