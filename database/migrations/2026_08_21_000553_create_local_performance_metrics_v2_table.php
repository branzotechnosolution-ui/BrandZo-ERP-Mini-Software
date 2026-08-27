<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('local_performance_metrics_v2')) {
            Schema::create('local_performance_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('LOC-PRF-99420');
                $table->decimal('local_latency_ms', 6, 2)->default(12.00);
                $table->string('status')->default('LOCAL_PERFORMANCE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('local_performance_metrics_v2');
    }
};
