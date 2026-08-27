<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_drip_analytics_v2')) {
            Schema::create('crm_drip_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-DRP-99420');
                $table->decimal('open_rate', 5, 2)->default(64.20);
                $table->decimal('reply_rate', 5, 2)->default(38.50);
                $table->decimal('revenue_generated', 15, 2)->default(1450000.00);
                $table->string('status')->default('AI_SALES_ASSISTANT_DRIP_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_drip_analytics_v2');
    }
};
