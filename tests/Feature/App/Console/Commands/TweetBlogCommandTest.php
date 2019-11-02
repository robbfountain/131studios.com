<?php

namespace Tests\Feature\App\Console\Commands;

use App\Blog;
use Tests\TestCase;
use App\Jobs\SendTweetForNewBlog;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TweetBlogCommandTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function It_tweets_a_published_blog_from_today()
    {
        Bus::fake();

        $published = factory(Blog::class)->state('notTweeted')->create();

        Artisan::call('studios:tweet-blog');

        Bus::assertDispatched(SendTweetForNewBlog::class, function ($job) use ($published) {
            return $job->blog->id === $published->id;
        });
    }

    /** @test * */
    public function It_will_not_tweet_an_unpublished_blog()
    {
        Bus::fake();

        $unpublished = factory(Blog::class)->state('unpublished')->create();

        Artisan::call('studios:tweet-blog');

        Bus::assertNotDispatched(SendTweetForNewBlog::class);
    }

    /** @test * */
    public function It_will_not_duplicate_a_tweet()
    {
        Bus::fake();

        $tweeted = factory(Blog::class)->create();

        $this->assertNotNull($tweeted->tweet_id);

        Artisan::call('studios:tweet-blog');

        Bus::assertNotDispatched(SendTweetForNewBlog::class);
    }
}
