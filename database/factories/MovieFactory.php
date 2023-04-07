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
            'title' => 'Movie title',
            'release_date' => $this->faker->date(),
            'cover_url' => $this->faker->imageUrl(1000,1500),
            'description' => $this->faker->sentence(20),
            'rating' => $this->faker->numberBetween(0, 100)
        ];
    }
}
