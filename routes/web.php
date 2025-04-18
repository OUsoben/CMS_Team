<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Departments;
use App\Models\Employees;
use Illuminate\Support\Facades\Route;
use App\Models\Positions;

Route::get('/', function () {
    $employeeCount = Employees::count();
    $departmentCount = Departments::count();
    $positionCount = Positions::count();

    return view('dashboard', compact('employeeCount', 'departmentCount', 'positionCount'));
});
# Panha
Route::get('/addcontact', [EmployeeController::class, 'index']);
Route::post('/addcontact', [EmployeeController::class, 'store']);

Route::post('/adddepartment', function () {
    $department = new \App\Models\Departments();
    $department->name = request('department_search');
    $department->save();

    return redirect('/addcontact')->with('success', 'Department added successfully!');
});

Route::post('/addposition', function () {
    $department = new \App\Models\Positions();
    $department->title = request('position_search');
    $department->save();

    return redirect('/addcontact')->with('success', 'Department added successfully!');
});

Route::get('/editcontact', function () {
    return view('contactEdit');
});
Route::get('/contactlist', function () {
    // Fetch all employees with their related department and position
    $employees = Employees::with(['department', 'position'])->paginate(8);
    $departmentCount = Departments::count();
    return view('contactList', [
        'employees' => $employees,
        'departmentCount' => $departmentCount
    ]);
});

Route::get('/contactlist/{id}', function ($id) {
    $employees = Employees::with(['department', 'position'])
        ->where('department_id', $id)
        ->get();

    return view('employees', [
        'employees' => $employees
    ]);
});



Route::get('/profile', function () {
    return view('profile');
});
