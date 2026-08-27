<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_benchmarks_v2')) {
            Schema::create('global_benchmarks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('benchmark_category')->default('Global Enterprise SaaS Performance');
                $table->string('percentile')->default('Top 0.1% Global Benchmark');
                $table->decimal('query_latency_ms', 5, 2)->default(1.42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_benchmarks_v2');
    }
};
