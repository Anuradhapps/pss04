<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommonData>
 */
class CommonDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'district' => fake()->country(),
            'asc_' => fake()->city(),
            'ai_range' => fake()->city(),
            'village' => fake()->city(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'crop_variety' => 'Bg '.$this->faker->numberBetween(200, 450),
            'established_date' => fake()->date(),
            'breeding_method' => fake()->randomElement(['Broadcast', 'Transplant', 'Parachute']),
        ];
    }
}
