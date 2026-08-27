<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_lead_routing_metrics_v2')) {
            Schema::create('crm_lead_routing_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-RUT-99420');
                $table->integer('auto_assigned_leads_count')->default(142);
                $table->integer('vip_leads_routed_count')->default(24);
                $table->string('status')->default('LEAD_ROUTING_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_lead_routing_metrics_v2');
    }
};
