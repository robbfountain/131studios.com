<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;

class ProjectController extends Controller
{
    /**
     * @param  null  $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke($slug = null)
    {
        return view('frontend.projects')->with([
            'projects' => $this->getProjects(),
            'title' => 'Our Work | 131 Studios',
            'heading' => 'Our Work',
        ]);
    }

    public function show(Project $project)
    {
        return view('frontend.project.show',[
            'project' => $project,
            'title' => $project->title . ' | 131 Studios',
        ]);
    }

    /**
     * @return mixed
     */
    private function getProjects()
    {
        return Project::published()->orderBy('created_at', 'DESC')->get();
    }
}
