<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'intro' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(4),
            'post_img' => $this->faker->imageUrl(),
            'body' => $this->faker->paragraph(),
            'user_id' => rand(1, 10),
        ];
    }
}
