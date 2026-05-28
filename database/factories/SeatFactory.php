<?php

namespace Database\Factories;

use App\Models\Seat;
use App\Models\Studio;  
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'studio_id' => Studio::inRandomOrder()->first()->id,
            'seat_number' => fake()->randomElement(['A1', 'A2', 'A3', 'B1', 'B2', 'B3', 'C1', 'C2']),
            'row' => fake()->randomElement(['A', 'B', 'C', 'D']),
            'type' => fake()->randomElement(['Regular', 'VIP', 'IMAX']),
            'status' => fake()->randomElement(['Available', 'Booked']),
            'price' => fake()->numberBetween(35000, 100000),
        ];
    }
}
