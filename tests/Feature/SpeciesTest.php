<?php

namespace Tests\Feature;

use App\Models\Elephpant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpeciesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_routes(): void
    {
        $response = $this->get('/species');
        $response_home = $this->get('/');
        $response->assertStatus(200);
        $response_home->assertStatus(200);
    }

    public function test_elephpant_data(): void
    {
        $response = $this->get('/species');
        $response->assertStatus(200);
        $this->assertEquals(Elephpant::all(), $response->viewData('elephpants'));
    }
}
