<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{

    /**
     * @param null $slug
     *
     * @return $this
     */
    public function index($slug = null)
    {
        return response()->json([
            'data' => Project::visible()->orderBy('lft', 'ASC')->get(),
            'categories' => Category::all(),
        ]);
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
            'project' => $project
        ]);
    }
}
