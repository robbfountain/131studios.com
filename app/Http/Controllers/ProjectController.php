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
            'projects' => $this->getProjects()
        ]);

    }
}
