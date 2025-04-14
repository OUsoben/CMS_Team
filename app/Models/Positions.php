<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    /** @use HasFactory<\Database\Factories\PositionsFactory> */
    use HasFactory;
    protected $table = 'positions';

    protected $fillable = [
        'title',
    ];

    public function employees()
    {
        return $this->hasMany(Employees::class);
    }
}
