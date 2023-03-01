<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'dni' => fake()->dni(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->mobileNumber(),
            'password' => '$2y$10$aXpL2pNCiotD3iVAnklKr.MJVH/fsuiLFjVS/JBL7IEGKLJzq2PTa', // admin
        ];
    }
}
