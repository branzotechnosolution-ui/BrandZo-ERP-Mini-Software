<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('profit_analytics_metrics_v2')) {
            Schema::create('profit_analytics_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('PROF-MET-2026-9942');
                $table->decimal('profitability_boost_percent', 5, 2)->default(38.40);
                $table->string('gross_margin')->default('88.4% High Margin Tier');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('profit_analytics_metrics_v2');
    }
};
