<?php

namespace Tests\Feature\App\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContractControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function show_displays_a_contract()
    {
        $this->withoutExceptionHandling();
    }
}
