<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        $blogs = Blog::published()->whereHas('category', function ($query) {
            $query->where('name', '!=', Blog::PROJECT);
        });

        if ($request->has('c')) {
            $blogs->wherehas('category', function ($query) use ($request) {
                $query->where('slug', $request->get('c'));
            });
        }

        return view('frontend.blog.index')->with([
            'blogs' => $blogs->latest('published_at')->get(),
        ]);
    }

    /**
     * @return mixed
     */
    private function getCategories()
    {
        return Category::has('blog')->get();
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Blog $blog)
    {
        abort_unless($blog->is_published, 404);

        $blog->increment('views');

        return view('frontend.blog.show', compact('blog'))->with([
            'title' => $blog->title.$this->titleSuffix,
        ]);
    }
}
