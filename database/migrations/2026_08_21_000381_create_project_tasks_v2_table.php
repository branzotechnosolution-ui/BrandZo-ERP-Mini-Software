<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('project_tasks_v2')) {
            Schema::create('project_tasks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('task_code')->default('TSK-AI-99420');
                $table->integer('total_tasks')->default(18400);
                $table->decimal('task_completion_percent', 5, 2)->default(99.80);
                $table->string('status')->default('SMART_TASK_ASSIGNMENT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('project_tasks_v2');
    }
};
