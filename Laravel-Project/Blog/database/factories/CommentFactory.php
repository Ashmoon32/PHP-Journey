<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     "content" => $this->faker->paragraph,
        //     "article_id" => rand(1, 20),
        //     "user_id" => rand(1, 2),
        // ];
        return [
        "content" => $this->faker->paragraph,
        // This ensures a User and Article exists for every comment
        "user_id" => \App\Models\User::factory(), 
        "article_id" => \App\Models\Article::factory(),
    ];
    }
}
