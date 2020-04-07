<?php

namespace Tests\Feature\App\Http\Controllers;

use App\Blog;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BlogControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function Index_shows_a_view()
    {
        $response = $this->get(route('blog.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.blog.index');

        $response->assertViewHas('title');

        $response->assertViewHas('blogs');
    }

    /** @test **/
    public function Show_displays_a_blog()
    {
        $blog = factory(Blog::class)->create();

        $response = $this->get(route('blog.show', $blog->slug));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.blog.show');

        $response->assertViewHas('title');

        $response->assertViewHas('blog');

        $response->assertSee($blog->title);
    }

    /** @test **/
    public function Show_will_not_display_unpublished_blog()
    {
        $this->withExceptionHandling();

        $blog = factory(Blog::class)->state('unpublished')->create();

        $response = $this->get(route('blog.show', $blog->slug));

        $response->assertStatus(404);
    }
}
