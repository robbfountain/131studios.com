<?php

namespace Tests\Feature\App\Http\Controllers;

use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    /** @test * */
    public function Index_returns_a_view()
    {
        $response = $this->get(route('contact.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.contact');

        $response->assertViewHas('title');
    }
}
