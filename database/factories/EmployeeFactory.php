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
    public function definition()
    {
        $prefix = 'EE';
        return [
            'employee_id' => $prefix. "-".fake()->unique()->numberBetween(1, 99),
            'full_name' => fake()->name,
            'job_title' => fake()->jobTitle(),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
            'age' => fake()->numberBetween(18, 60),
            'hire_date' => fake()->date(),
            'annual_salary' => fake()->numberBetween(400000,500000),
            'bonus' => fake()->numberBetween(400000,500000)
        ];
    }
}
