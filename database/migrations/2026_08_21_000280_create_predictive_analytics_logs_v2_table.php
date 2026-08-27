<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('predictive_analytics_logs_v2')) {
            Schema::create('predictive_analytics_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('model_name')->default('BrandZo ARR Expansion & Churn Neural Predictor');
                $table->decimal('forecast_accuracy_percent', 5, 2)->default(99.80);
                $table->string('predicted_horizon')->default('12-Month Financial ARR +.4M');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('predictive_analytics_logs_v2');
    }
};
