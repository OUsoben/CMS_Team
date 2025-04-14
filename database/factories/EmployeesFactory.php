<?php

namespace Database\Factories;

use App\Models\Departments;
use App\Models\Positions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = ['m', 'f', 'o'];
        $randomGender = $genders[array_rand($genders)];

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $randomGender,
            'department_id' => Departments::factory(),
            'position_id' => Positions::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'hire_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            // Add any other fields you want to generate here
            //

        ];
    }
}
