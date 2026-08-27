<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('hrms_departments_v2')) {
            Schema::create('hrms_departments_v2', function (Blueprint $table) {
                $table->id();
                $table->string('dept_code')->default('DPT-2026-9942');
                $table->string('department_name')->default('Engineering & AI');
                $table->string('dept_head')->default('Vikramaditya Sharma');
                $table->integer('employee_count')->default(48);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('hrms_departments_v2');
    }
};
