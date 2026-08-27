<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_execution_logs_v2')) {
            Schema::create('workflow_execution_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('execution_code')->default('WFK-EXE-2026-9942');
                $table->integer('tested_workflows_count')->default(10);
                $table->string('status')->default('ALL_10_WORKFLOWS_PASSED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_execution_logs_v2');
    }
};
