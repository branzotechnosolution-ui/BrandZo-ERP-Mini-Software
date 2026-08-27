<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_usage_metrics_v2')) {
            Schema::create('api_usage_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('API-USG-99420');
                $table->integer('daily_api_requests')->default(18400000);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_INTEGRATION_HUB_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_usage_metrics_v2');
    }
};
