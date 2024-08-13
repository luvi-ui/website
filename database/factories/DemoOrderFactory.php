<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class DemoOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->numberBetween(1, 3000),
            'status' => fake()->randomElement(['paid', 'pending', 'cancelled']),
            'customer' => fake()->unique()->safeEmail(),
            'amount' => fake()->numberBetween(100, 1000),
        ];
    }
}
