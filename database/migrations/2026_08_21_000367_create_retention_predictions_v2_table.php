<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('retention_predictions_v2')) {
            Schema::create('retention_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('retention_code')->default('RET-PRED-99420');
                $table->decimal('retention_forecast_percent', 5, 2)->default(99.58);
                $table->decimal('churn_risk_percent', 5, 2)->default(0.20);
                $table->string('status')->default('AI_CUSTOMER_EXPERIENCE_SUPPORT_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('retention_predictions_v2');
    }
};
