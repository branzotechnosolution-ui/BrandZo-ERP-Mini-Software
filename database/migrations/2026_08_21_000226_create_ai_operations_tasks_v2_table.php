<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_operations_tasks_v2')) {
            Schema::create('ai_operations_tasks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('task_code')->default('OPT-TASK-99420');
                $table->string('title')->default('Autonomous Cross-Module Capacity Allocation');
                $table->string('assigned_executive')->default('AI COO Agent');
                $table->string('status')->default('EXECUTED_SUCCESSFULLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_operations_tasks_v2');
    }
};
