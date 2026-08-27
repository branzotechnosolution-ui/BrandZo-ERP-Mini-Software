<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_workflow_execution_logs_v2')) {
            Schema::create('crm_workflow_execution_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('execution_code')->default('EXC-WKF-99420');
                $table->string('workflow_code')->default('WKF-2026-9942');
                $table->string('trigger_event')->default('Score Threshold Reached');
                $table->text('executed_action')->default('Assigned to Senior Sales Exec, Created 15-min Follow-up Task, Sent High Priority WhatsApp Alert');
                $table->string('status')->default('SUCCESS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_workflow_execution_logs_v2');
    }
};
