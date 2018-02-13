<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller {

    /**
     * @param null $slug
     *
     * @return $this
     */
    public function index($slug = null)
    {
        return $slug
            ? $this->show($slug)
            : view('frontend.projects')->with(['heading'  => 'Projects',
                                               'projects' => Project::visible()->orderBy('lft', 'ASC')->get()]);
    }

    /**
     * @param $slug
     *
     * @return $this
     */
    public function show($slug)
    {
        $project = Project::findBySlug($slug);

        return view('frontend.portfolio-item')->with(['heading' => $project->title, 'project' => $project]);
    }
}
