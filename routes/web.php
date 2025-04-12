<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});
Route::get('/addcontact', function () {
    return view('contactCreate');
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
