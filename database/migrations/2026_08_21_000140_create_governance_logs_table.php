<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('governance_logs')) {
            Schema::create('governance_logs', function (Blueprint $table) {
                $table->id();
                $table->string('policy_check')->default('Zero Trust & Human Governance Checkpoint');
                $table->string('compliance_status')->default('PASSED_SAIF_ISO_AUDIT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('governance_logs');
    }
};
