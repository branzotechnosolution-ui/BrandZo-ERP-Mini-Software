<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('training_analytics_v2')) {
            Schema::create('training_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytic_code')->default('TRN-MET-99420');
                $table->integer('ai_recommendations_active')->default(384);
                $table->string('status')->default('AI_KNOWLEDGE_MANAGEMENT_ENTERPRISE_LEARNING_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('training_analytics_v2');
    }
};
