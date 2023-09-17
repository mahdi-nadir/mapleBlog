<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostLikes>
 */
class PostLikesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => $this->faker->numberBetween(1, 15),
            'user_id' => $this->faker->numberBetween(1, 15),
            'is_like' => $this->faker->boolean(),
        ];
    }
}
