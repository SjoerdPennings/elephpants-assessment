<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RankingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_routes(): void
    {
        $response = $this->get('/ranking');

        $response->assertStatus(200);
    }
}
