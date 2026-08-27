<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_workflow_metrics_v2')) {
            Schema::create('crm_workflow_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-WKF-99420');
                $table->integer('total_workflows_count')->default(12);
                $table->integer('total_executions_count')->default(1420);
                $table->decimal('execution_success_rate', 5, 2)->default(99.60);
                $table->string('status')->default('WORKFLOW_AUTOMATION_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_workflow_metrics_v2');
    }
};
