<?php

namespace Tests\Feature;

use App\Models\Elephpant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HerdTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_routes(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/herd');
        $response->assertStatus(200);
    }

    public function test_elephpant_data(): void
    {
        $user = User::factory()->create();
        $user_elephpants = Elephpant::factory(5)->create(['user_id' => $user->id]);
        $response = $this
            ->actingAs($user)
            ->get('/herd');

        $this->assertEquals($user_elephpants->get('id'), $response->viewData('elephpants')->get('id'));
    }
}
