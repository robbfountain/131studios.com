<?php

namespace App\Jobs;

use App\Blog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Thujohn\Twitter\Facades\Twitter;

/**
 * Class SendTweetForNewBlog.
 */
class SendTweetForNewBlog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Blog
     */
    public $blog;

    /**
     * @var
     */
    public $response;

    /**
     * Create a new job instance.
     *
     * @param Blog $blog
     */
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->postTweet()
            ->updateBlogPostWithTweet();
    }

    /**
     * Updates Blog post in database.
     */
    private function updateBlogPostWithTweet()
    {
        $payload = json_decode($this->response);

        $this->blog->update([
            'tweet_id' => $payload->id,
        ]);
    }

    /**
     * @return $this
     */
    private function postTweet()
    {
        $this->response = Twitter::postTweet([
            'status' => $this->blog->title."\n".$this->blog->shareUrl(),
            'format' => 'json',
        ]);

        return $this;
    }
}
