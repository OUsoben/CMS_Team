<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{


    //
    function index($id) {
        $employees = Employees::with(['department', 'position'])
        ->where('department_id', $id);

        if(request()->has('search'))
        {
            $employees = $employees->where('first_name' , 'like' , '%'.request()->get('search').'%')
            ->orWhere('last_name' , 'like' , '%'.request()->get('search').'%')
            ;
        }
    return view('employees', [
        'employees' => $employees->paginate(6),
    ]);
    }
}
