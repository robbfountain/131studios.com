<?php

namespace Tests\Feature\App\Http\Controllers;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class WebsiteControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function Website_design_returns_a_view()
    {
        $response = $this->get(route('website-design.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.website-design');
    }

    /** @test * */
    public function Hosting_returns_a_view()
    {
        $response = $this->get(route('hosting.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.hosting');
    }

    /** @test * */
    public function Seo_returns_a_view()
    {
        $response = $this->get(route('seo.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.seo');
    }

    /** @test * */
    public function Additional_services_returns_a_view()
    {
        $response = $this->get(route('additional-services.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.additional-services');
    }

    /** @test * */
    public function Email_hosting_returns_a_view()
    {
        $response = $this->get(route('email-hosting.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.email-hosting');
    }

    /** @test * */
    public function Social_media_returns_a_view()
    {
        $response = $this->get(route('social-media.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.social-media');
    }

    /** @test * */
    public function Projects_returns_a_view()
    {
        $response = $this->get(route('project.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.blog.index');
    }

    /** @test * */
    public function Index_returns_a_view()
    {
        $response = $this->get(route('index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.index');
    }
}
