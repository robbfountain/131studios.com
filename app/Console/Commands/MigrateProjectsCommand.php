<?php

namespace App\Console\Commands;

use App\Blog;
use App\Project;
use Illuminate\Console\Command;

class MigrateProjectsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrates projects from the Blog to the Projects table';

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
        Blog::where('category_id', 5)->get()->each(function ($blog) {
            $this->line('Migrating '.$blog->title);
            Project::create([
                'title' => $blog->title,
                'content' => $blog->body,
                'url' => $blog->url,
                'image' => $blog->image,
                'is_published' => $blog->is_published,
            ]);

            $blog->update([
                'is_published' => false,
            ]);

            $this->comment('Finished Migrating '.$blog->title);
        });

        return Command::SUCCESS;
    }
}
