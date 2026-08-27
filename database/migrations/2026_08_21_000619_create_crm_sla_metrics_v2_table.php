<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sla_metrics_v2')) {
            Schema::create('crm_sla_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-SLA-99420');
                $table->decimal('avg_response_time_minutes', 8, 2)->default(11.40);
                $table->integer('total_sla_compliance_rate')->default(96);
                $table->integer('sla_violations_count')->default(6);
                $table->string('status')->default('SLA_MONITORING_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sla_metrics_v2');
    }
};
