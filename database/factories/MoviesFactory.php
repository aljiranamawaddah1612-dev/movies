<?php

namespace Database\Factories;

use App\Models\movies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<movies>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->word(),
            'genre' => fake()->word(),
            'release_year' => fake()->year(),
            'duration' => rand(60, 180),
            'rating' => rand(1, 10),
        ];
    }
}
