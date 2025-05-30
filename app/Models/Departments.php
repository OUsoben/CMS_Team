<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentsFactory> */
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'name',

    ];

    public function employees()
    {
        return $this->hasMany(\App\Models\Employees::class, 'department_id');
    }
}
