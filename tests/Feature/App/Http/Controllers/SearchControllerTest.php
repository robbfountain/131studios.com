<?php

namespace Tests\Feature\App\Http\Controllers;

use App\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchControllerTest extends TestCase
{
    use RefreshDatabase;

   /** @test */
   public function Index_returns_a_view()
   {
       factory(Blog::class)->create();

       $this->withExceptionHandling();
       $response = $this->get(route('search.index'));

       $response->assertStatus(200);

       $response->assertViewIs('frontend.blog.search');
   }
}
