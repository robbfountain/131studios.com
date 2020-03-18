<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

/**
 * Class BlogController
 * @package App\Http\Controllers
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::published();

        if ($request->has('c')) {
            $blogs->wherehas('category', function ($query) use ($request) {
                $query->where('slug', $request->get('c'));
            });
        }

        return view('frontend.blog.index')->with([
            'title' => 'Our Blog | 131 Studios',
            'blogs' => $blogs->latest('published_at')->get(),
            'categories' => $this->getCategories(),
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
     * @return view
     */
    public function show(Blog $blog)
    {
        abort_unless($blog->is_published, 404);

        return view('frontend.blog.show', compact('blog'))->with([
            'title' => $blog->title . $this->titleSuffix,
        ]);
    }
}
