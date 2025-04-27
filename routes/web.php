<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProfileController;
use App\Models\Departments;
use App\Models\Employees;
use App\Models\Positions;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $employeeCount = Employees::count();
    $departmentCount = Departments::count();
    $positionCount = Positions::count();
    return view('welcome' ,compact('employeeCount', 'departmentCount', 'positionCount'));
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addcontact', [EmployeeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
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
    // Use withCount to count employees for each department
    $departments = Departments::withCount('employees')->paginate(8);
    $departmentCount = Departments::count();

    return view('contactList', [
        'departments' => $departments,
        'departmentCount' => $departmentCount
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contactlist/{id}', [EmployeesController::class, 'index']);


require __DIR__.'/auth.php';
