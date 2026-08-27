<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('server_health_metrics_v2')) {
            Schema::create('server_health_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('SRV-HEALTH-99420');
                $table->decimal('cpu_utilization_percent', 5, 2)->default(14.20);
                $table->decimal('memory_utilization_percent', 5, 2)->default(38.40);
                $table->decimal('db_latency_ms', 5, 2)->default(1.42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('server_health_metrics_v2');
    }
};
