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
        User::all()->each(function (User $user): void {
            $user->elephpants()->saveMany(
                Elephpant::factory()->count(rand(1,15))->create()
            );
        });
    }
}
