<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_employees_v7')) {
            Schema::create('ai_employees_v7', function (Blueprint $table) {
                $table->id();
                $table->string('employee_code')->default('AI-EMP-99420');
                $table->string('name')->default('AI Lead Sales Strategist');
                $table->string('department')->default('Global Growth & Sales');
                $table->decimal('accuracy_score', 5, 2)->default(99.98);
                $table->string('status')->default('ACTIVE_DEPLOYED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_employees_v7');
    }
};
