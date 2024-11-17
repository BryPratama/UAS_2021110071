<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
<<<<<<< HEAD
=======
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
<<<<<<< HEAD
=======
=======
            'name'      => fake()->name(),
            'email'     => fake()->unique()->safeEmail(),
            'password'  => bcrypt('123'),
            'nik'       => date('Ymd').rand(000,999),
            'alamat'    => fake()->address(),
            'tlp'       => fake()->phoneNumber(),
            'role'      => rand(0,1),
            'tglLahir'  => fake()->date('Y-m-d','now'),
            'is_active' => 1,
            'is_mamber' => 0,
            'is_admin'  => 1,
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
<<<<<<< HEAD
=======
=======
    // public function unverified(): static
    // {
    //     // return $this->state(fn (array $attributes) => [
    //     //     'email_verified_at' => null,
    //     // ]);
    // }
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
}
