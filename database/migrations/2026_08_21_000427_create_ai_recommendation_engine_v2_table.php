<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_recommendation_engine_v2')) {
            Schema::create('ai_recommendation_engine_v2', function (Blueprint $table) {
                $table->id();
                $table->string('engine_code')->default('RECOM-ENG-99420');
                $table->integer('master_recommendations_count')->default(384);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OPERATING_SYSTEM_FINAL_INTEGRATION_COMPLETE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_recommendation_engine_v2');
    }
};
