<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_forecasts_v2')) {
            Schema::create('revenue_forecasts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('forecast_code')->default('REV-FCST-99420');
                $table->decimal('forecast_accuracy_percent', 5, 2)->default(99.80);
                $table->decimal('predicted_arr_usd', 12, 2)->default(48400000.00);
                $table->string('status')->default('HIGH_GROWTH_PREDICTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_forecasts_v2');
    }
};
