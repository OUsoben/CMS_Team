<?php

namespace App\Http\Controllers;

use App\Models\Employees as ModelsEmployees;
use Illuminate\Http\Request;

class Employees extends Controller
{
    //
    function index($id)
    {
        $employees = ModelsEmployees::with(['department', 'position'])
        ->where('department_id', $id)
        ->paginate(7);
    return view('employees', [
        'employees' => $employees
    ]);
    }
}
