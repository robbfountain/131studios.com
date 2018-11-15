<?php

namespace App\Http\Controllers;

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
        return request()->expectsJson()
            ? response()->json([
                'data' => Project::visible()->orderBy('title', 'ASC')->get(),
            ])
            : view('frontend.projects')->with(['projects' => Project::visible()->orderBy('lft', 'ASC')->get()]);

    }

    /**
     * @param $slug
     *
     * @return $this
     */
    public function show($slug)
    {
        $project = Project::findBySlug($slug);

        return view('frontend.portfolio-item')->with([
            'heading' => $project->title,
            'project' => $project,
        ]);
    }
}
