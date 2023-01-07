<?php

namespace App\Console\Commands;

use App\Classes\Filters\Hidden;
use App\Classes\ProjectReader;
use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;

class BrowserShotCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'browsershot:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Processes browsershot screenshots for each project';

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
        $projects = ProjectReader::fromFilesystem()
            ->applyFilters([
                new Hidden,
            ])->get();

        foreach ($projects as $project) {
            $path = public_path('images/screenshots/'.$project->slug.'.png');
            if (file_exists($path)) {
                $this->comment('Screenshot exists for '.$project->url.'...skipping');
            } else {
                if (! is_null($project->url)) {
                    $this->line('Getting screenshot for '.$project->url);
                    try {
                        Browsershot::url($project->url)
                            ->windowSize(1920, 1080)
                            ->setDelay(8000)
                            ->fullPage()
                            ->save($path);
                    } catch (\Exception $e) {
                        $this->error('Could not resolve '.$project->url);
                    }
                } else {
                    $this->error('No url defined');
                }
            }
        }

        return 0;
    }
}
