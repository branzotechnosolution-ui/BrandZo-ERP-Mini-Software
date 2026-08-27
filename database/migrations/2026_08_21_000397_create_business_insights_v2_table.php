<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_insights_v2')) {
            Schema::create('business_insights_v2', function (Blueprint $table) {
                $table->id();
                $table->string('insight_code')->default('INS-BI-99420');
                $table->integer('executive_recommendations_count')->default(384);
                $table->string('status')->default('AI_ENTERPRISE_ANALYTICS_BUSINESS_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_insights_v2');
    }
};
