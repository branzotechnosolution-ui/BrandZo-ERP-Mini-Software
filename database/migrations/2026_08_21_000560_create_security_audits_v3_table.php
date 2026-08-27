<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('security_audits_v3')) {
            Schema::create('security_audits_v3', function (Blueprint $table) {
                $table->id();
                $table->string('audit_code')->default('SEC-AUD-163-9942');
                $table->string('environment')->default('SECURITY_COMPLIANCE_ENVIRONMENT');
                $table->string('status')->default('SECURITY_AUDIT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('security_audits_v3');
    }
};
