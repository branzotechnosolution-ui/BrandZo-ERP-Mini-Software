<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ad_performance_metrics_v2')) {
            Schema::create('ad_performance_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('ad_code')->default('AD-PERF-99420');
                $table->string('platform')->default('GOOGLE_META_LINKEDIN_ADS');
                $table->decimal('conversion_rate_percent', 5, 2)->default(7.72);
                $table->string('status')->default('AD_BUDGET_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ad_performance_metrics_v2');
    }
};
