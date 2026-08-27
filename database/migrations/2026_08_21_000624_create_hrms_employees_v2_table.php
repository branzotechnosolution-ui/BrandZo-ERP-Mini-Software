<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('hrms_employees_v2')) {
            Schema::create('hrms_employees_v2', function (Blueprint $table) {
                $table->id();
                $table->string('employee_code')->unique()->default('EMP-2026-9942');
                $table->string('full_name')->default('Vikramaditya Sharma');
                $table->string('email')->default('vikram@brandzo.in');
                $table->string('phone')->default('9876543210');
                $table->string('department')->default('Engineering & AI');
                $table->string('designation')->default('Lead Software Architect');
                $table->date('joining_date')->default('2026-01-15');
                $table->string('employment_type')->default('Full-Time');
                $table->decimal('monthly_salary', 15, 2)->default(150000.00);
                $table->string('status')->default('ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('hrms_employees_v2');
    }
};
