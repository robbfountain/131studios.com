<?php

namespace App\Console\Commands;

use App\Blog;
use Carbon\Carbon;
use Illuminate\Console\Command;

class PublishBlogCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'studios:publish-blogs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish blog entries that are due';

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
     * @return mixed
     */
    public function handle()
    {
        Blog::unpublished()->get()->each(function ($blog) {
            if ($blog->published_at->lt(Carbon::now())) {
                $this->comment('Publishing '.$blog->title);
                $blog->publish();
            }
        });
    }
}
