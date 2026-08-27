<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('financial_risk_scores_v2')) {
            Schema::create('financial_risk_scores_v2', function (Blueprint $table) {
                $table->id();
                $table->string('risk_code')->default('RISK-SCORE-2026-9942');
                $table->decimal('risk_score', 5, 2)->default(0.01);
                $table->decimal('chargeback_rate_percent', 5, 4)->default(0.0010);
                $table->string('status')->default('LOW_RISK_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_risk_scores_v2');
    }
};
