<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sla_escalation_histories_v2')) {
            Schema::create('crm_sla_escalation_histories_v2', function (Blueprint $table) {
                $table->id();
                $table->string('escalation_code')->default('ESC-SLA-99420');
                $table->string('lead_code')->default('LEAD-2026-9942');
                $table->string('escalation_tier')->default('Tier 2 Escalation'); // Tier 1, Tier 2, Tier 3
                $table->string('action_taken')->default('Escalation Email & WhatsApp Dispatched to Sales Manager');
                $table->string('status')->default('RESOLVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sla_escalation_histories_v2');
    }
};
