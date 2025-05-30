<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->char('gender');
            $table->foreignIdFor(\App\Models\Departments::class ,'department_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Positions::class , 'position_id')->constrained()->cascadeOnDelete();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('hire_date');
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
