<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'poster' => fake()->imageUrl(400, 600, 'movies', true),
            'rating' => fake()->randomFloat(1, 0, 10),
            'description' => fake()->paragraph,
        ];
    }
}
