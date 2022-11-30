<?php

namespace Tests\Feature\App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BlogControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Storage::fake();
    }

    /** @test **/
    public function Index_shows_a_view()
    {
        $response = $this->get(route('blog.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.blog.index');

        $response->assertViewHas('blogs');
    }

    /** @test **/
    public function Show_displays_a_blog()
    {
        $this->markTestSkipped('Skipping: Refactoring Blog');
    }

    /** @test **/
    public function Show_will_not_display_unpublished_blog()
    {
        $this->markTestSkipped('Skipping: Refactoring Blog');
    }
}
