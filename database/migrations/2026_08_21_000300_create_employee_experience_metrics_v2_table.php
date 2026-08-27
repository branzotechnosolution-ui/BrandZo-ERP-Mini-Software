<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('employee_experience_metrics_v2')) {
            Schema::create('employee_experience_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('EXP-MET-2026-9942');
                $table->decimal('satisfaction_score', 5, 2)->default(99.60);
                $table->decimal('attrition_risk_percent', 4, 2)->default(0.20);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_experience_metrics_v2');
    }
};
