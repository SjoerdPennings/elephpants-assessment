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
        //Create ten new elephpants for each user
        User::all()->each(function (User $user): void {
            $user->elephpants()->saveMany(
                Elephpant::factory()->count(10)->create()
            );
        });

        //Attach all existing elephpants to three additional random users.
        Elephpant::all()->each(function (Elephpant $elephpant): void {
            foreach (range(1,3) as $i) {
                User::find(rand(1, User::all()->count()))->elephpants()->attach($elephpant);
            }
        });

        //Create some new unlinked elephpants
        Elephpant::factory()->count(20)->create();
    }
}
