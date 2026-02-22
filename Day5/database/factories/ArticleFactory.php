<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::where('role_id', 1)->pluck('id')->toArray();
        $category_id = Category::pluck('id')->toArray();

        return [

            'user_id' => $this->faker->randomElement($user_id),
            'category_id' => $this->faker->randomElement($category_id),
            'content' => $this->faker->realText(),
            'title' => $this->faker->title()

        ];
    }
}
