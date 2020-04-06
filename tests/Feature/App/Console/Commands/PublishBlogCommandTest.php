<?php

namespace Tests\Feature\App\Console\Commands;

use App\Blog;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class PublishBlogCommandTest extends TestCase
{
    use DatabaseMigrations;

    public $unpublished;

    public $future;

    public function setUp(): void
    {
        parent::setUp();

        $this->unpublished = factory(Blog::class)->state('unpublished')->create();
        $this->future = factory(Blog::class)->state('future')->create();
    }

    /** @test * */
    public function It_publishes_a_blog()
    {
        $this->assertFalse($this->unpublished->is_published);

        Artisan::call('studios:publish-blogs');

        $this->assertTrue($this->unpublished->fresh()->is_published);
    }

    /** @test * */
    public function It_will_not_publish_a_blog_with_a_publish_date_in_the_future()
    {
        $this->assertFalse($this->future->is_published);

        Artisan::call('studios:publish-blogs');

        $this->assertFalse($this->future->fresh()->is_published);
    }
}


