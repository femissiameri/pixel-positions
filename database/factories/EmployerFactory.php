<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->company;
        return [
            'name' => $name,
            'logo' => fake()->imageUrl(width: 100, height: 100, word: Str::of($name)->substr(0, 3)->upper()),
            'user_id' => User::factory(),
        ];
    }
}
