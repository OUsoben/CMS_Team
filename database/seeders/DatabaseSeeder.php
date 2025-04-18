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
        ]);

        // Employees::factory(10)->create();

        $departments = [
            'HR',
            'IT',
            'Finance',
            'Marketing',
            'Sales',
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
        ];

        foreach ($positions as $position) {
            Positions::factory()->create([
                'title' => $position,
            ]);
        }

        $numOfEmployees = 5;

        for ($i = 1; $i < $numOfEmployees + 1; $i++) {
            for ($j = 1; $j < $numOfEmployees + 1; $j++) {
                Employees::factory()->withDefault($i)->create();
            }
            
        }
        

    }
}
