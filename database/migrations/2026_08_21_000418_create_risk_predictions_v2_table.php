<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('risk_predictions_v2')) {
            Schema::create('risk_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_code')->default('RISK-PRED-99420');
                $table->decimal('mitigation_accuracy_percent', 5, 2)->default(99.98);
                $table->string('status')->default('PREDICTIVE_RISK_ANALYSIS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('risk_predictions_v2');
    }
};
