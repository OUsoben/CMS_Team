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

    function api($id) {
        $employee = \App\Models\Employees::where('id', $id)->with(['department', 'position'])
            ->get();
        return response()->json($employee);
    }

    function put(Request $request, $id) {
        $contact = \App\Models\Employees::find($id);

        // dd($request->all());

        $contact->first_name = $request->input('employee_first_name');
        $contact->last_name = $request->input('employee_last_name');
        $contact->gender = $request->input('employee_gender');
        $contact->email = $request->input('employee_email');
        $contact->department_id = $request->input('employee_department_id');
        $contact->position_id = $request->input('employee_position_id');
        $contact->hire_date = $request->input('employee_hired_date');
        $contact->phone = $request->input('employee_phone');
        $contact->address = $request->input('employee_address');

        $contact->save();
        return redirect("/contactlist/".$contact->department_id)->with('success', 'Contact updated successfully!');
    }

    function destroy($id) {
        $contact = \App\Models\Employees::find($id);
        $contact->delete();
        return redirect('/contactlist')->with('success', 'Contact deleted successfully!');
    }
}
