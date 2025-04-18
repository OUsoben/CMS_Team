<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeesFactory> */
    use HasFactory;
    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'department_id',
        'position_id',
        'email',
        'phone',
        'hire_date',
        'address'
    ];



    public function department()
    {
        return $this->belongsTo(Departments::class);
    }
    public function position()
    {
        return $this->belongsTo(Positions::class);
    }
    public function tags()
    {
        return $this->belongsToMany(EmployeeTag::class, 'employee_tag_map');
    }
}
