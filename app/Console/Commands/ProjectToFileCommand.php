<?php

namespace App\Console\Commands;

use App\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ProjectToFileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project-to-file:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Converts Database Projects to Files';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Project::all()->each(function ($project) {
            $fileContents = view('frontend.partials.project-to-file', compact('project'))->render();
            if (!Storage::disk('projects')
                ->exists($project->created_at->format('Y').'/'.$project->created_at->format('m').'/'.$project->slug.'.md')) {
                Storage::disk('projects')
                    ->put($project->created_at->format('Y').'/'.$project->created_at->format('m').'/'.$project->slug.'.md',
                        $fileContents);
                $this->line('Copied ' . $project->title);
            } else {
                $this->comment('Skipping ' . $project->title);
            }
        });

        return Command::SUCCESS;
    }
}
