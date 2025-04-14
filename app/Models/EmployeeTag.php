<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTag extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeTagFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function employees()
    {
        return $this->belongsToMany(Employees::class, 'employee_tags_map');
    }
}
