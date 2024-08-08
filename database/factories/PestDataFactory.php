<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PestData>
 */
class PestDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cropGrowthCode' => $this->faker->numberBetween(1, 9),
            'NoOfRainyDaysInLastWeek' => $this->faker->numberBetween(0, 7),
            'temperature' => $this->faker->numberBetween(20, 40),
            // Generate random values for pest counts
            ...collect(range(1, 10))->flatMap(fn($i) =>
                collect(range(1, 5))->mapWithKeys(fn($j) => ["location{$i}_pest{$j}" => $this->faker->numberBetween(0, 100)])
            )->toArray(),
            'otherPestDamages' => $this->faker->sentence(),
        ];
    }
}
