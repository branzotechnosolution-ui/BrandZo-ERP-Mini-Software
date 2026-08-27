<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('hrms_employee_metrics_v2')) {
            Schema::create('hrms_employee_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-EMP-99420');
                $table->integer('total_employees_count')->default(184);
                $table->integer('active_departments_count')->default(8);
                $table->string('status')->default('HRMS_EMPLOYEE_MODULE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('hrms_employee_metrics_v2');
    }
};
