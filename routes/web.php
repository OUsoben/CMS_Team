<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
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
    return view('contactList');
});
Route::get('/profile', function () {
    return view('profile');
});
