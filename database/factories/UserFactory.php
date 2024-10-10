<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'), // Default password
            'vendor_name' => $this->faker->unique()->company(),
            'profile_picture' => $this->faker->imageUrl(640, 480, 'people', true),
            'cover_picture' => $this->faker->imageUrl(1280, 720, 'business', true),
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'phone_no' => $this->faker->phoneNumber(),
            'zip' => $this->faker->postcode(),
            'website' => $this->faker->url(),
            'account_type' => $this->faker->randomElement(['individual', 'dealership']),
            'role' => 'vendor',
            'user_can_add_products' => $this->faker->boolean(),
            'verified' => $this->faker->boolean(50), // 50% chance of being verified
            'otp' => null,
            'otp_expires_at' => null,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
