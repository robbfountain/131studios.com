<?php

namespace Tests\Feature\App\Http\Controllers;

use App\Notifications\SendContactFormEmail;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
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
