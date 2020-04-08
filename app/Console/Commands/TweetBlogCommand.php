<?php

namespace App\Console\Commands;

use App\Blog;
use App\Jobs\SendTweetForNewBlog;
use Illuminate\Console\Command;

/**
 * Class TweetBlogCommand.
 */
class TweetBlogCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'studios:tweet-blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new Tweet based on a newly published blog entry.';

    /**
     * @var
     */
    protected $response;

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
        Blog::waitingForTweet()->each(function ($blog) {
            $this->comment('Posting Tweet for '.$blog->title);
            SendTweetForNewBlog::dispatch($blog);
        });
    }
}
