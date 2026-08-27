<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_usage_metrics_v2')) {
            Schema::create('customer_usage_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('usage_code')->default('CUST-USG-99420');
                $table->integer('daily_api_requests')->default(18400000);
                $table->decimal('customer_health_score', 5, 2)->default(99.80);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_SAAS_MARKETPLACE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_usage_metrics_v2');
    }
};
