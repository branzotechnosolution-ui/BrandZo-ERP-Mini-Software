<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cloud_sla_metrics_v2')) {
            Schema::create('cloud_sla_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('sla_code')->default('SLA-MTR-99420');
                $table->decimal('uptime_sla_percent', 7, 4)->default(99.9990);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_CLOUD_INFRASTRUCTURE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cloud_sla_metrics_v2');
    }
};
