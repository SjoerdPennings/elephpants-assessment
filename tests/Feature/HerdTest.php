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
    public function test_route_without_id(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/herd');
        $response->assertStatus(200);
    }

    public function test_route_with_id(): void
    {
        $user = User::factory()->create(['id' => 1]);
        $user_2 = User::factory()->create(['id' => 2]);

        $response = $this
            ->actingAs($user)
            ->get('/herd/2');
        $response->assertStatus(200);
    }

    public function test_elephpant_data(): void
    {
        $user = User::factory()->create();
        $user_elephpants = $user->elephpants()->saveMany(
            Elephpant::factory()->count(5)->create()
        );
        $response = $this
            ->actingAs($user)
            ->get('/herd');

        $this->assertEquals($user_elephpants->get('id'), $response->viewData('elephpants')->get('id'));
    }
}
