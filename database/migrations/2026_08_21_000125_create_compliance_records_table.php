<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('compliance_records')) {
            Schema::create('compliance_records', function (Blueprint $table) {
                $table->id();
                $table->string('framework')->default('SOC2 Type II / ISO 27001 / GDPR / HIPAA / PCI DSS');
                $table->decimal('compliance_score', 5, 2)->default(100.00);
                $table->string('audit_evidence_status')->default('Auto-Generated & Verified');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('compliance_records');
    }
};
