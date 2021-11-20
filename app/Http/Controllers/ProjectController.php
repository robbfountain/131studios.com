<?php

namespace App\Http\Controllers;

use App\Classes\Project;
use App\Classes\ProjectReader;
use App\Classes\Filters\Hidden;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * @param  null  $slug
     *
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
        return ProjectReader::fromFilesystem()->applyFilters([new Hidden])->desc()->get();
    }

    /**
     * @param $year
     * @param $month
     * @param $slug
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function show($year, $month, $slug)
    {
        if (Storage::disk('projects')->exists("$year/$month/$slug.md")) {
            $project = Project::getByPath("$year/$month/$slug.md");

            return view('frontend.project.show',[
                'project' => $project,
                'title' => $project->title,
            ]);
        }

        abort('404');
    }
}
