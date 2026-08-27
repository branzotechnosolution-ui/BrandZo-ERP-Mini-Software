<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('demand_forecasts_v2')) {
            Schema::create('demand_forecasts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('forecast_code')->default('FCST-DEMAND-2026-9942');
                $table->decimal('forecast_accuracy_percent', 5, 2)->default(99.40);
                $table->string('future_sales_horizon')->default('12-Month Autonomous Sales & Inventory Sync');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('demand_forecasts_v2');
    }
};
