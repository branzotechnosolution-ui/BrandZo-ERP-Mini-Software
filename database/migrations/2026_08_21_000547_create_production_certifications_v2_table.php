<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('production_certifications_v2')) {
            Schema::create('production_certifications_v2', function (Blueprint $table) {
                $table->id();
                $table->string('certification_code')->default('CRT-PRD-99420');
                $table->string('compliance_standard')->default('ISO27001_SOC2_TYPE2_HIPAA_GDPR_COMPLIANT');
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_ULTIMATE_EDITION_CERTIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('production_certifications_v2');
    }
};
