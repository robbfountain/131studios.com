<?php

namespace Tests\Feature\App\Http\Livewire;

use App\Http\Livewire\ContactUs;
use App\Notifications\SendContactFormEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Livewire\Livewire;
use Tests\TestCase;

class ContactTest extends TestCase
{
    public function setUp():void
    {
        parent::setUp();

        Notification::fake();
    }


    /** @test */
    public function it_sends_an_email_when_the_form_is_submitted()
    {
        Notification::assertNothingSent();

        Livewire::test(ContactUs::class)
            ->set([
                'name' => 'Robb Fountain',
                'email' => 'robb@131studios.com',
                'message' => 'This is a test message',
            ])
            ->call('sendEmail')
            ->assertHasNoErrors();

        Notification::assertSentTo(new AnonymousNotifiable(),SendContactFormEmail::class);
    }

    /** @test */
    public function all_fields_must_be_filled_out()
    {
        Notification::assertNothingSent();

        Livewire::test(ContactUs::class)
            ->set([
                'name' => '',
                'email' => '',
                'message' => '',
            ])
            ->call('sendEmail')
            ->assertHasErrors();

        Notification::assertNothingSent();
    }

}
