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
        return [
            'content' => $this->faker->text(50),
            'likes' => $this->faker->numberBetween(0, 100),
            'dislikes' => $this->faker->numberBetween(0, 100),
            'post_id' => $this->faker->numberBetween(1, 20),
            'user_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
