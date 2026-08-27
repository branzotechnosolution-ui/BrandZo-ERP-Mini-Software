<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_ai_scoring_metrics_v2')) {
            Schema::create('crm_ai_scoring_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-SCR-99420');
                $table->decimal('avg_ai_score', 5, 2)->default(72.40);
                $table->string('status')->default('AI_SCORING_INTENT_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_ai_scoring_metrics_v2');
    }
};
