<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "libelle" => $this->faker->randomElement(['Technology', 'Travel', 'Food', 'Health', 'Sports', 'Business', 'Science']),
            "description" => $this->faker->title()
        ];
    }
}
