<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('legal_risk_predictions_v2')) {
            Schema::create('legal_risk_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_code')->default('PRED-LGL-99420');
                $table->decimal('risk_prevention_score_percent', 5, 2)->default(99.80);
                $table->integer('active_disputes_count')->default(0);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('legal_risk_predictions_v2');
    }
};
