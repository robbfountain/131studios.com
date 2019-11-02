<?php

namespace Tests\Unit\App;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function It_verifies_an_administrator()
    {
         $admin = factory(User::class)->create(['email' => 'robb@131studios.com']);

         $this->assertTrue($admin->isAdmin());

        $user = factory(User::class)->create(['email' => 'ted@131studios.com']);

        $this->assertFalse($user->isAdmin());
    }
}
