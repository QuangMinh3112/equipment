<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'user_name' => fake()->userName(),
            'full_name' => fake()->name(),
            'date_of_birth' => fake()->date(),
            'identity_card' => fake()->numberBetween(1000, 100000),
            'phone_number' => fake()->phoneNumber(),
            'account_code' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' =>  Hash::make('password'),
            'created_by' => 1,
            'address' => fake()->address(),
            'status' => fake()->randomElement([1, 0]),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
