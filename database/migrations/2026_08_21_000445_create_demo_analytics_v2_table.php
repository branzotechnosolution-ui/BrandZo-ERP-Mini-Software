<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('demo_analytics_v2')) {
            Schema::create('demo_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytics_code')->default('DEMO-ANA-99420');
                $table->integer('ai_recommendations_count')->default(384);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_SALES_DEMO_INTELLIGENCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_analytics_v2');
    }
};
