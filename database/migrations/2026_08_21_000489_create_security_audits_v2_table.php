<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('security_audits_v2')) {
            Schema::create('security_audits_v2', function (Blueprint $table) {
                $table->id();
                $table->string('audit_code')->default('SEC-AUD-99420');
                $table->string('compliance_framework')->default('SOC2_TYPE_II_AND_ISO27001');
                $table->string('status')->default('SECURITY_AUDIT_PASSED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('security_audits_v2');
    }
};
