<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inbox>
 */
class InboxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'inboxuid' => fake()->uuid(),
            'user1_id' => fake()->numberBetween(1, 5),
            'user2_id' => fake()->numberBetween(1, 5),
            'last_message' => fake()->text(75),
            // relative to the user that sent the last message, whether it's user1_id or user2_id
            'last_message_sent_id' => fake()->numberBetween(1, 5),
        ];
    }
}
