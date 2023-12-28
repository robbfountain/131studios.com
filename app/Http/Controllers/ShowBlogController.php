<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ShowBlogController extends Controller
{
    protected string $titleSuffix = ' - 131 Studios Blog';

    /**
     * Display the specified resource.
     *
     * @param  $year
     * @param  $month
     * @param  $slug
     * @return Factory|View
     *
     * @throws FileNotFoundException
     */
    public function __invoke($year, $month, $slug)
    {
        if (Storage::disk('blogs')->exists("$year/$month/$slug.md")) {
            $blog = \App\Classes\Blog::getByPath("$year/$month/$slug.md");

            return view('frontend.blog.show', compact('blog'))->with([
                'title' => $blog->title.$this->titleSuffix,
            ]);
        }

        abort('404');
    }
}
