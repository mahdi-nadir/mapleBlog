<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'inbox_id' => fake()->numberBetween(1, 5),
            // 'user_inbox_id' => fake()->numberBetween(1, 5),
            // 'user_communicating_id' => fake()->numberBetween(1, 5),
            // 'content' => fake()->text(150),
            'user1_id' => fake()->numberBetween(1, 5),
            'user2_id' => fake()->numberBetween(1, 5),
            'content' => fake()->text(150),
        ];
    }
}
