<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Allowance>
 */
class AllowanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word() . ' Allowance',
            'description' => $this->faker->sentence(10),
            'amount' => $this->faker->randomFloat(2, 0, 1000000),
            'rule' => $this->faker->randomElement(['fixed', 'percentage']),
        ];
    }
}
