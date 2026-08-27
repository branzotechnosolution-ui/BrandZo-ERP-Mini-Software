<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_health_metrics_v2')) {
            Schema::create('enterprise_health_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('health_code')->default('ENT-HLTH-2026-9942');
                $table->decimal('overall_health_score', 5, 2)->default(100.00);
                $table->string('status')->default('ENTERPRISE_HEALTH_PERFECT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_health_metrics_v2');
    }
};
