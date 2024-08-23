<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salary = '$' . fake()->numberBetween(30, 200) . ',000 USD';
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => $salary,
            'location' => fake()->randomElement(['Remote', 'On Site']),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->url,
            'featured' => fake()->boolean
        ];
    }
}
