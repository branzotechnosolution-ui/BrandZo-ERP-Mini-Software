<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_governance_logs')) {
            Schema::create('enterprise_governance_logs', function (Blueprint $table) {
                $table->id();
                $table->string('governance_framework')->default('Unified Global Policy Control v100.0');
                $table->decimal('compliance_score', 5, 2)->default(100.00);
                $table->string('audit_status')->default('CONTINUOUS_AUDIT_PASS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_governance_logs');
    }
};
