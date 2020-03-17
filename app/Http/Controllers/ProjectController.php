<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;

class ProjectController extends Controller
{

    /**
     * @param null $slug
     *
     * @return $this
     */
    public function index($slug = null)
    {
        return view('frontend.projects')->with([
            'projects' => $this->getProjects(),
            'title' => 'Our Portfolio'
        ]);
    }

    /**
     * @return mixed
     */
    private function getProjects()
    {
        return Blog::published()->whereHas('category', function ($query) {
            $query->project();
        })->orderBy('create_at','DESC')->get();
    }
}
