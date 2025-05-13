<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;  // Import the Employee model
use App\Models\Department;

class EmployeeDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 20 dummy records
        for ($i = 0; $i < 20; $i++) {
            // Get a random employee (from 100 total employees)
            $employee = Employee::inRandomOrder()->first();
            
            // Check if the employee exists to prevent null errors
            if ($employee) {
                // Attach random departments (from 4 total departments)
                $departmentIds = Department::inRandomOrder()->limit(2)->pluck('id')->toArray();
                
                // Attach departments to employee
                $employee->departments()->attach($departmentIds);  
            }
        }
    }
}
