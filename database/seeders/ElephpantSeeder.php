<?php

namespace Database\Seeders;

use App\Models\Elephpant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class ElephpantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (User::all() as $user) {
            Elephpant::factory(rand(1,15))->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
