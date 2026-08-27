<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_lead_routing_rules_v2')) {
            Schema::create('crm_lead_routing_rules_v2', function (Blueprint $table) {
                $table->id();
                $table->string('rule_code')->unique()->default('RUL-2026-9942');
                $table->string('rule_type')->default('Round Robin'); // Round Robin, Location Based, Skill Based, Workload Based
                $table->string('target_team')->default('Senior Sales Team');
                $table->boolean('is_active')->default(true);
                $table->integer('priority_order')->default(1);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_lead_routing_rules_v2');
    }
};
