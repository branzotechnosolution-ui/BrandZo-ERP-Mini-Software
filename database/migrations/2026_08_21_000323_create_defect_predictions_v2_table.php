<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('defect_predictions_v2')) {
            Schema::create('defect_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('defect_code')->default('DEFECT-PRED-99420');
                $table->decimal('defect_probability_percent', 5, 4)->default(0.0001);
                $table->string('root_cause_analysis')->default('Root Cause Neutralized via Predictive Calibration');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('defect_predictions_v2');
    }
};
