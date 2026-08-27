<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('growth_predictions_v2')) {
            Schema::create('growth_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('forecast_model')->default('BrandZo AI Revenue Forecast Model v4.0');
                $table->string('projected_arr_12m')->default('.4 Million ARR');
                $table->decimal('confidence_score', 5, 2)->default(99.60);
                $table->string('market_trend')->default('38.4% Demand Surge in Healthcare AI SDRs');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('growth_predictions_v2');
    }
};
