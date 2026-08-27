<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_predictions_v2')) {
            Schema::create('ai_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_code')->default('PRED-BI-99420');
                $table->decimal('forecast_accuracy_percent', 5, 2)->default(99.80);
                $table->string('revenue_prediction_display')->default('+.4M ARR Expansion');
                $table->string('status')->default('AI_PREDICTIONS_SYNTHESIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_predictions_v2');
    }
};
