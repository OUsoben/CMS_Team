<?php

namespace Database\Seeders;

use App\Models\Departments;
use App\Models\Employees;
use App\Models\Positions;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password111',

        ]);

        // Employees::factory(10)->create();

        $departments = [
            'HR',
            'IT',
            'Finance',
            'Marketing',
            'Sales',
            'Engineering',
            'Biology',
            'Accounting',
            'Khmer',
            'Japanese',
            'Science'
        ];

        foreach ($departments as $department) {
            Departments::factory()->create([
                'name' => $department,
            ]);
        }

        $positions = [
            'Manager',
            'Developer',
            'Analyst',
            'Designer',
            'Salesperson',
            'Engineer',
            'Biologist',
            'Accountant',
            'Teacher',
            'Translator',
            'Scientist'
        ];

        foreach ($positions as $position) {
            Positions::factory()->create([
                'title' => $position,
            ]);
        }

        $numDepartments = count($departments);
        $numOfEmployees = 40;

        for ($i = 1; $i < $numDepartments + 1; $i++) {
            for ($j = 1; $j < $numOfEmployees + 1; $j++) {
                Employees::factory()->withDefault($i)->create();
            }

        }
    }
}
