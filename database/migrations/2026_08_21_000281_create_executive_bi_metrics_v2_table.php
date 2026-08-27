<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_bi_metrics_v2')) {
            Schema::create('executive_bi_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('kpi_name')->default('Global Realtime Executive BI Scoreboard');
                $table->decimal('query_speed_ms', 5, 2)->default(1.42);
                $table->string('industry_percentile')->default('Top 0.1% Global Benchmark');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_bi_metrics_v2');
    }
};
