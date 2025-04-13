<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('employee_tags_map', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Employees::class, 'employees_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\EmployeeTag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_tags');
        Schema::dropIfExists('employee_tags_map');
    }
};
