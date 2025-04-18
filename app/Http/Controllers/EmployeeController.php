<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index() {
        return view('contactCreate');
    }

    function store(Request $request) {
        $contact = new \App\Models\Employees();
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->gender = $request->input('gender');
        $contact->email = $request->input('email');
        $contact->department_id = $request->input('department_search');
        $contact->position_id = $request->input('position_search');
        $contact->hire_date = $request->input('hired_date');
        $contact->phone = $request->input('phone_number');
        $contact->address = $request->input('address');

        $contact->save();

        return redirect('/contactlist')->with('success', 'Contact added successfully!');
    }
}
