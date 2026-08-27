<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('leadership_metrics_v2')) {
            Schema::create('leadership_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('leadership_code')->default('LEAD-MET-2026-9942');
                $table->integer('executive_kpis_tracked')->default(1420);
                $table->decimal('organization_health_score', 5, 2)->default(99.80);
                $table->string('status')->default('LEADERSHIP_PERFORMANCE_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('leadership_metrics_v2');
    }
};
