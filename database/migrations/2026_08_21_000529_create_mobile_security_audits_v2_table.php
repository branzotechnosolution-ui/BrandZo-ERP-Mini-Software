<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('mobile_security_audits_v2')) {
            Schema::create('mobile_security_audits_v2', function (Blueprint $table) {
                $table->id();
                $table->string('security_code')->default('MOB-SEC-99420');
                $table->string('owasp_compliance')->default('OWASP_MASVS_COMPLIANT');
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_MOBILE_RELEASE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_security_audits_v2');
    }
};
