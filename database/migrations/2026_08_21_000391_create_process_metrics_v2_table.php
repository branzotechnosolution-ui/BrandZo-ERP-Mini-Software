<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('process_metrics_v2')) {
            Schema::create('process_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('process_code')->default('PROC-MET-99420');
                $table->decimal('process_health_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_WORKFLOW_ORCHESTRATION_BUSINESS_PROCESS_AUTOMATION_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('process_metrics_v2');
    }
};
