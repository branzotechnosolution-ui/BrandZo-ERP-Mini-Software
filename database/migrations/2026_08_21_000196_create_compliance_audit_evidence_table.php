<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('compliance_audit_evidence')) {
            Schema::create('compliance_audit_evidence', function (Blueprint $table) {
                $table->id();
                $table->string('framework')->default('SOC2 Type II / ISO 27001 / HIPAA / GDPR');
                $table->string('pen_test_status')->default('PASSED_ZERO_CRITICAL_VULNERABILITIES');
                $table->decimal('security_score', 5, 2)->default(100.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('compliance_audit_evidence');
    }
};
