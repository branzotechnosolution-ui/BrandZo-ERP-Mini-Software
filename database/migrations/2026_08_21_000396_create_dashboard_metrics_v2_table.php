<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('dashboard_metrics_v2')) {
            Schema::create('dashboard_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('dashboard_code')->default('DASH-MET-2026-9942');
                $table->decimal('performance_score', 5, 2)->default(99.80);
                $table->string('status')->default('DASHBOARD_METRICS_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('dashboard_metrics_v2');
    }
};
