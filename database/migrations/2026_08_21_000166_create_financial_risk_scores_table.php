<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('financial_risk_scores')) {
            Schema::create('financial_risk_scores', function (Blueprint $table) {
                $table->id();
                $table->decimal('risk_index', 5, 2)->default(0.42);
                $table->string('risk_level')->default('ZERO_FINANCIAL_RISK');
                $table->string('audit_status')->default('PASSED_SAIF_ISO_AUDIT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_risk_scores');
    }
};
