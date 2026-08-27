<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('regional_compliance_records')) {
            Schema::create('regional_compliance_records', function (Blueprint $table) {
                $table->id();
                $table->string('country_code')->default('IN / US / DE / SG / UK');
                $table->string('framework')->default('GST E-Invoicing / HIPAA / GDPR / SOC2');
                $table->decimal('compliance_score', 5, 2)->default(100.00);
                $table->string('audit_status')->default('PASS_ZERO_NON_COMPLIANCE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('regional_compliance_records');
    }
};
