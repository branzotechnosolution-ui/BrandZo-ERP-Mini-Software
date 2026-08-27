<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cash_flow_predictions_v2')) {
            Schema::create('cash_flow_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_code')->default('CF-PRED-99420');
                $table->decimal('prediction_accuracy_percent', 5, 2)->default(99.80);
                $table->integer('runway_months')->default(48);
                $table->string('status')->default('PEAK_LIQUIDITY_GUARANTEED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_flow_predictions_v2');
    }
};
