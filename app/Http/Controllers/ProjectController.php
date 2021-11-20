<?php

namespace App\Http\Controllers;

use App\Classes\ProjectReader;
use Illuminate\Support\Facades\Storage;

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

    /**
     * @return mixed
     */
    private function getProjects()
    {
        return ProjectReader::fromFilesystem()->desc()->get();
    }

    public function show($year, $month, $slug)
    {
        if (Storage::disk('projects')->exists("$year/$month/$slug.md")) {
            $project = \App\Classes\Project::getByPath("$year/$month/$slug.md");

            return view('frontend.project.show', compact('project'));
        }

        abort('404');
    }
}
