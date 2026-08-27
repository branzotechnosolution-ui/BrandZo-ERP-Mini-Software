<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('task_assignments_v2')) {
            Schema::create('task_assignments_v2', function (Blueprint $table) {
                $table->id();
                $table->string('assignment_code')->default('ASGN-TSK-99420');
                $table->string('assigned_role')->default('AI_AGENT_WORKFORCE');
                $table->decimal('precision_percent', 5, 2)->default(99.98);
                $table->string('status')->default('AUTONOMOUSLY_ASSIGNED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('task_assignments_v2');
    }
};
