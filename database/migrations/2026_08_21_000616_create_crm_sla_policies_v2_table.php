<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sla_policies_v2')) {
            Schema::create('crm_sla_policies_v2', function (Blueprint $table) {
                $table->id();
                $table->string('policy_code')->unique()->default('SLA-2026-9942');
                $table->string('policy_name')->default('Enterprise SLA Escalation Matrix');
                $table->integer('tier1_minutes')->default(15); // Sales Rep Alert
                $table->integer('tier2_minutes')->default(60); // Manager Escalation
                $table->integer('tier3_minutes')->default(1440); // Auto-Reassignment
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sla_policies_v2');
    }
};
