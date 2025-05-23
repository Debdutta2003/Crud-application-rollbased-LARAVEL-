<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->safeEmail,
                'phone' => $this->faker->phoneNumber,
                'position' => $this->faker->jobTitle,
                'salary' => $this->faker->randomFloat(2, 30000, 100000),
                'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
