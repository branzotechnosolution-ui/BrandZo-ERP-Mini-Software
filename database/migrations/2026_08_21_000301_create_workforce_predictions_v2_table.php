<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workforce_predictions_v2')) {
            Schema::create('workforce_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_code')->default('PRED-HR-99420');
                $table->decimal('retention_prediction_percent', 5, 2)->default(99.80);
                $table->string('capacity_forecast_horizon')->default('12-Month Autonomous Workforce Expansion');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workforce_predictions_v2');
    }
};
