<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});

# Panha
Route::get('/addcontact', function () {
    return view('contactCreate');
});

Route::post('/addcontact', function() {
    $contact = new \App\Models\Employees();
    $contact->first_name = request('first_name');
    $contact->last_name = request('last_name');
    $contact->email = request('email');

    // $department = \App\Models\Departments::where('name', request('department_name'))->first();
    // $contact->department_id = $department->getAttribute('id');
    $contact->department_id = request('department_id');

    // $position = \App\Models\Positions::where('title', request('position_name'))->first();
    // $contact->position_id = $position->getAttribute('id');;

    $contact->position_id = request('position_id');

    $contact->hire_date = request('hired_date');
    $contact->phone = request('phone_number');

    // dd($contact);

    $contact->save();

    return redirect('/contactlist')->with('success', 'Contact added successfully!');
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
