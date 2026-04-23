<?php

namespace Database\Seeders;

use App\Models\movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         movies::factory()->count(800)->create();
    }
}
