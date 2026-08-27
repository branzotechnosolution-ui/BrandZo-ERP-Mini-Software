<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_revenue_predictions')) {
            Schema::create('ai_revenue_predictions', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_period')->default('12 Months ARR Forecast');
                $table->decimal('predicted_arr_usd', 12, 2)->default(28400000.00);
                $table->decimal('confidence_score', 5, 2)->default(99.60);
                $table->string('dynamic_pricing_tier')->default('Optimized Enterprise SLA');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_revenue_predictions');
    }
};
