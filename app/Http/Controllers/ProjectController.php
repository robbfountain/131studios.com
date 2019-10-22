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

    private function getProjects()
    {
        return Blog::visible()->whereHas('category', function ($query) {
            $query->project();
        })->get();
    }

    /**
     * @param $slug
     *
     * @return $this
     */
    public function show($slug)
    {
        $project = Project::findBySlug($slug);

        return view('frontend.view-project')->with([
            'project' => $project,
            'title' => $project->title,
        ]);
    }
}
