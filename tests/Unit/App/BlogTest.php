<?php

namespace Tests\Unit\App;

use App\Blog;
use App\User;
use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BlogTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function It_has_a_category()
    {
         $blog = factory(Blog::class)->create();

         $this->assertInstanceOf(Category::class, $blog->category);
    }

    /** @test **/
    public function It_displays_correct_title_for_a_project()
    {
         $project = factory(Blog::class)->state('project')->create([
             'title' => '131 Studios Website Launched',
         ]);

         $this->assertEquals('131 Studios', trim($project->fresh()->project_title));
    }

    /** @test **/
    public function It_publishes_a_blog()
    {
         $blog = factory(Blog::class)->state('unpublished')->create();

         $this->assertFalse($blog->is_published);

         $updated = $blog->publish();

         $this->assertTrue($blog->is_published);
    }

    /** @test **/
    public function Scope_unpublished_returns_unpublished_blogs_only()
    {
        factory(Blog::class, 10)->state('unpublished')->create();
        factory(Blog::class,5)->create();

        $query = Blog::unpublished()->get();

        $this->assertEquals(10, $query->count());
    }

    /** @test **/
    public function It_has_a_user()
    {
        $blog = factory(Blog::class)->create();

        $this->assertInstanceOf(User::class, $blog->user);
    }

    /** @test **/
    public function Scope_published_returns_published_blogs_only()
    {
        factory(Blog::class, 10)->state('unpublished')->create();
        factory(Blog::class,5)->create();

        $query = Blog::published()->get();

        $this->assertEquals(5, $query->count());
    }

    /** @test **/
    public function Scope_waiting_for_tweet_returns_untweeted_blogs_only()
    {
        factory(Blog::class, 10)->state('notTweeted')->create();
        factory(Blog::class,5)->create();

        $query = Blog::waitingForTweet()->get();

        $this->assertEquals(10, $query->count());
    }

    /** @test **/
    public function Get_link_to_full_post_returns_correct_type()
    {
        $tweetCat = factory(Category::class)->create(['name' => 'Tweet']);
        $linkCat = factory(Category::class)->create(['name' => 'Link']);

        $tweet = factory(Blog::class)->state('tweet')->create(['category_id' => $tweetCat->id]);
        $link =  factory(Blog::class)->state('url')->create(['category_id' => $linkCat->id]);
        $blog =  factory(Blog::class)->create();

        $this->assertEquals($tweet->tweet, $tweet->getLinkToFullPost());
        $this->assertEquals($link->reference_url, $link->getLinkToFullPost());
        $this->assertEquals($blog->shareUrl(), $blog->getLinkToFullPost());
    }
}
