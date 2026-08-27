<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('benchmark_data')) {
            Schema::create('benchmark_data', function (Blueprint $table) {
                $table->id();
                $table->string('industry_sector')->default('Enterprise SaaS & HealthTech');
                $table->decimal('brandzo_percentile', 5, 2)->default(99.40);
                $table->string('competitor_benchmark')->default('Top 1% Global SaaS Benchmark');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('benchmark_data');
    }
};
