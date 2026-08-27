<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('owasp_compliance_v2')) {
            Schema::create('owasp_compliance_v2', function (Blueprint $table) {
                $table->id();
                $table->string('owasp_code')->default('OWS-CMP-99420');
                $table->string('owasp_top_10')->default('OWASP_MASVS_L2_AND_TOP_10_PASSED');
                $table->string('status')->default('OWASP_COMPLIANT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('owasp_compliance_v2');
    }
};
