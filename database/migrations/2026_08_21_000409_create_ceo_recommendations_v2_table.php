<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ceo_recommendations_v2')) {
            Schema::create('ceo_recommendations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('recommendation_code')->default('CEO-RECOM-99420');
                $table->integer('strategic_recommendations_count')->default(384);
                $table->string('status')->default('AI_CEO_EXECUTIVE_DECISION_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ceo_recommendations_v2');
    }
};
