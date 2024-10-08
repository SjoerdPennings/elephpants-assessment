<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elephpant>
 */
class ElephpantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'event' => $this->faker->sentence(),
            'company' => $this->faker->company(),
            'year' => $this->faker->year(),
            'image' => $this->faker->randomDigit() . '.jpg',
        ];
    }
}
