<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
	public function index() 
	{
		return view(env('THEME').'.projects')->with(['heading' => 'Projects', 'projects' => Project::where('hidden',0)->orderBy('lft','ASC')->get()]);
	} // index

    public function show($slug) 
    {
    	 $project = Project::findBySlug($slug);

    	 return view(env('THEME').'.portfolio-item')->with(['heading' => $project->title, 'project' => $project]);
    } // show
}
