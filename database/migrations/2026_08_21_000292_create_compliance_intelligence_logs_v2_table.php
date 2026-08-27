<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('compliance_intelligence_logs_v2')) {
            Schema::create('compliance_intelligence_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('framework')->default('SOC2 Type II, ISO 27001, GDPR, HIPAA, PCI DSS');
                $table->decimal('compliance_score_percent', 5, 2)->default(100.00);
                $table->string('audit_readiness')->default('CONTINUOUS_AUDIT_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('compliance_intelligence_logs_v2');
    }
};
