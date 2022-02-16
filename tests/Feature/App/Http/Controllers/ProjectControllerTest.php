<?php

namespace Tests\Feature\App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProjectControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp():void
    {
        parent::setUp();

        Storage::fake();
    }

    /** @test * */
    public function Index_returns_a_view()
    {
        $response = $this->get(route('project.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.projects');
    }
}
