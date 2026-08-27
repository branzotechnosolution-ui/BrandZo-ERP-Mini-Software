<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_governance_records')) {
            Schema::create('ai_governance_records', function (Blueprint $table) {
                $table->id();
                $table->string('policy_name')->default('Zero-Hallucination & Bias Prevention');
                $table->decimal('compliance_score', 5, 2)->default(100.00);
                $table->string('explainability_status')->default('100_PERCENT_EXPLAINABLE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_governance_records');
    }
};
