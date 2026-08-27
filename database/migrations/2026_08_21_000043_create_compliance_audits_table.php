<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('compliance_audits')) {
            Schema::create('compliance_audits', function (Blueprint $table) {
                $table->id();
                $table->string('compliance_type')->default('SOC2 & GDPR & ISO27001');
                $table->string('audit_status')->default('100% Compliant & Passed');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('compliance_audits');
    }
};
