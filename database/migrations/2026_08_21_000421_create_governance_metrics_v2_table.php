<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('governance_metrics_v2')) {
            Schema::create('governance_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('GOV-MET-99420');
                $table->integer('ai_recommendations_count')->default(384);
                $table->string('status')->default('AI_ENTERPRISE_GOVERNANCE_RISK_CONTROL_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('governance_metrics_v2');
    }
};
