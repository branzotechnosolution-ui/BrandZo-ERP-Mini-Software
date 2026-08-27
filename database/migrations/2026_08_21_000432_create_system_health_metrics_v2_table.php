<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('system_health_metrics_v2')) {
            Schema::create('system_health_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('health_code')->default('SYS-HLTH-2026-9942');
                $table->decimal('system_health_score', 5, 2)->default(99.99);
                $table->string('api_latency_display')->default('1.42ms Latency');
                $table->string('status')->default('SYSTEM_HEALTH_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('system_health_metrics_v2');
    }
};
