<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;

class ProjectController extends Controller
{
    /**
     * @param null $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($slug = null)
    {
        return view('frontend.project.projects')->with([
            'projects' => $this->getProjects(),
            'title' => 'Our Portfolio | 131 Studios',
            'heading' => 'Our Portfolio',
            'categories' => Category::has('blog')->get(),
        ]);
    }

    /**
     * @return mixed
     */
    private function getProjects()
    {
        return Blog::published()->whereHas('category', function ($query) {
            $query->project();
        })->orderBy('published_at', 'DESC')->get();
    }
}
