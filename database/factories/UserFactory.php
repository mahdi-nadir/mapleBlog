<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'role_id' => 2,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'img_user_id' => NULL,
            'gender_id' => 1,
            'date_of_birth' => fake()->date(),
            // 'dob' => fake()->numberBetween(1, 31),
            // 'mob' => fake()->numberBetween(1, 12),
            // 'yob' => fake()->numberBetween(1900, 2021),
            // 'country' => 'Canada',
            'system_id' => 2,
            'diploma_id' => fake()->numberBetween(1, 3),
            'noc_id' => fake()->numberBetween(1, 19),
            'eligibility_score' => fake()->numberBetween(0, 100),
            'crs_score' => fake()->numberBetween(300, 1000),
            'step_id' => 1,
            'is_banned' => false,
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
