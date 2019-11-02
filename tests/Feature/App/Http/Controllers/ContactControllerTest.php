<?php

namespace Tests\Feature\App\Http\Controllers;

use Tests\TestCase;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

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

    /** @test * */
    public function Store_sends_an_email()
    {
        Mail::fake();

        $contact = [
            'name' => 'Joe Blow',
            'email' => 'joeblow@email.com',
            'message' => 'fake message sent for testing',
        ];

        Mail::assertNothingSent();

        $response = $this->postJson(route('contact.store'), $contact);

        $response->assertStatus(200);

        Mail::assertSent(ContactFormSubmitted::class, function ($mail) use ($contact) {
            return $mail->info['name'] === $contact['name'];
        });
    }
}
