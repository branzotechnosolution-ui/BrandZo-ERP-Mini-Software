<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('vendor_risk_scores_v2')) {
            Schema::create('vendor_risk_scores_v2', function (Blueprint $table) {
                $table->id();
                $table->string('risk_code')->default('VEND-RISK-99420');
                $table->decimal('vendor_risk_score', 4, 2)->default(0.02);
                $table->string('contract_risk_status')->default('LOW_RISK_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('vendor_risk_scores_v2');
    }
};
