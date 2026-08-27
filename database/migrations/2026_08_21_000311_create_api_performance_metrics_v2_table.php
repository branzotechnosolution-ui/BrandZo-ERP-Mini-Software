<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_performance_metrics_v2')) {
            Schema::create('api_performance_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('api_code')->default('API-PERF-99420');
                $table->decimal('avg_latency_ms', 5, 2)->default(1.42);
                $table->decimal('error_rate_percent', 5, 4)->default(0.0001);
                $table->decimal('sla_uptime_percent', 6, 3)->default(99.999);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_performance_metrics_v2');
    }
};
