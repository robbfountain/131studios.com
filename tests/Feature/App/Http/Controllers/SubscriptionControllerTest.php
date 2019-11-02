<?php

namespace Tests\Feature\App\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubscriptionControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function Store_creates_a_subscription()
    {
        $email = ['email' => 'robb@131studios.com'];

        $response = $this->post(route('subscription.store'), $email);

        $response->assertStatus(204);

        $this->assertDatabaseHas('subscriptions',['email' => $email['email']]);
    }
}
