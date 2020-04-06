<?php

namespace Tests\Feature\App\Http\Controllers;

use App\Notifications\SendContactFormEmail;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Notifications\AnonymousNotifiable;
use Tests\TestCase;
use Illuminate\Support\Facades\Notification;

class ContactControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function Index_returns_a_view()
    {
        $response = $this->get(route('contact.index'));

        $response->assertStatus(200);

        $response->assertViewIs('frontend.contact');

        $response->assertViewHas('title');
    }

    /** @test * */
    public function Store_sends_an_email()
    {
        $this->withExceptionHandling();

        Notification::fake();

        factory(User::class)->create();

        $contact = [
            'name' => 'Joe Blow',
            'email' => 'joeblow@email.com',
            'message' => 'fake message sent for testing',
        ];

        Notification::assertNothingSent();

        $response = $this->postJson(route('contact.store'), $contact);

        $response->assertStatus(204);

        // Assert a notification was sent to the given users...
        Notification::assertSentTo(
            new AnonymousNotifiable, SendContactFormEmail::class
        );
    }
}
