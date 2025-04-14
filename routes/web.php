<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});

# Panha
Route::get('/addcontact', [EmployeeController::class, 'index']);
Route::post('/addcontact', [EmployeeController::class, 'store']);

Route::get('/editcontact', function () {
    return view('contactEdit');
});
Route::get('/contactlist', function () {
    return view('contactList');
});
Route::get('/profile', function () {
    return view('profile');
});
