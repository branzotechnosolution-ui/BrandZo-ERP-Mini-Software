<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_employees_v2')) {
            Schema::create('ai_employees_v2', function (Blueprint $table) {
                $table->id();
                $table->string('employee_code')->default('AI-EMP-99420');
                $table->string('roles')->default('Autonomous AI CFO, AI HR Director, AI VP Sales, AI Legal Counsel');
                $table->string('status')->default('AI_EMPLOYEE_MARKETPLACE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_employees_v2');
    }
};
