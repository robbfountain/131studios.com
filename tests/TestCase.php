<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp() :void
    {
        parent::setUp();
        DB::statement('PRAGMA foreign_keys=on;');
    }


    protected function signIn($user = null)
    {
        $user = $user ?: factory(User::class)->create();
        $this->actingAs($user);

        return $this;
    }
}
