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

Route::get('/employees/{id}', [EmployeeController::class, 'api']);

Route::put('/employees/{id}', [EmployeeController::class, 'put']);

Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

Route::post('/adddepartment', function () {
    $department = new \App\Models\Departments();
    $department->name = request('department_name');
    $department->save();

    return redirect('/addcontact')->with('success', 'Department added successfully!');
});

Route::post('/addposition', function () {
    $department = new \App\Models\Positions();
    $department->title = request('position_name');
    $department->save();

    return redirect('/addcontact')->with('success', 'Department added successfully!');
});

Route::get('/editcontact', function () {
    $employees = Employees::with(['department', 'position'])->get();
    $departments = Departments::all();
    $positions = Positions::all();
    // dd($employees);
    return view('contactEdit', [
        'employees' => $employees,
        'departments' => $departments,
        'positions' => $positions
    ]);
});
Route::get('/contactlist', function () {
    $departments = Departments::get();
    // dd($departments);
    $departmentCount = Departments::count();
    return view('contactList', [
        'departments' => $departments,
        'departmentCount' => $departmentCount
    ]);
});

Route::get('/contactlist/{id}', function ($id) {
    $employees = Employees::with(['department', 'position'])
        ->where('department_id', $id)
        ->paginate(4);
      

    return view('employees', [
        'employees' => $employees
    ]);
});



Route::get('/profile', function () {
    return view('profile');
});
