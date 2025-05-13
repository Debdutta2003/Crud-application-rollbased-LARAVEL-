<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Import the Employee model here

class EmployeeController extends Controller
{
    /**
     * Show the list of employees.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $employees = Employee::query();

        if ($search) {
            $employees = $employees->where('name', 'like', '%' . $search . '%')
                                   ->orWhere('email', 'like', '%' . $search . '%')
                                   ->orWhere('position', 'like', '%' . $search . '%');
        }

        $employees = $employees->paginate(10); // Optional: add pagination

        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:employees,email',
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
            'position' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'salary' => ['required', 'numeric'],
            'status' => 'required|in:active,inactive',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
            'position' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'salary' => ['required', 'numeric'],
            'status' => 'required|in:active,inactive',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }




    public function destroy(Employee $employee)
{
    // Detach all department relationships
    $employee->departments()->detach();

    // Now delete employee
    $employee->delete();

    return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
}
    
}
