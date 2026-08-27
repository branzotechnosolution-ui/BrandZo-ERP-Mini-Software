<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('payment_gateway_metrics_v2')) {
            Schema::create('payment_gateway_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('gateway_code')->default('GW-MET-99420');
                $table->decimal('success_rate_percent', 5, 2)->default(99.80);
                $table->decimal('latency_ms', 5, 2)->default(1.42);
                $table->string('status')->default('GATEWAY_HEALTH_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_gateway_metrics_v2');
    }
};
