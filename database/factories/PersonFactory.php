<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName=$this->faker->firstName();
        $lastName=$this->faker->lastName();
        return [
            'first_name'=>$firstName,
            'last_name'=>$lastName,
            'profile_photo_url'=>$this->faker->imageUrl(1000,1500, $firstName.' '.$lastName),
            'is_star'=>$this->faker->boolean(70)
        ];
    }
}
