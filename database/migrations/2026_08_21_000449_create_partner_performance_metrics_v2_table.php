<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_performance_metrics_v2')) {
            Schema::create('partner_performance_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('PTR-PRF-99420');
                $table->decimal('partner_performance_score', 5, 2)->default(99.80);
                $table->decimal('partner_health_score', 5, 2)->default(99.80);
                $table->string('status')->default('PARTNER_PERFORMANCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_performance_metrics_v2');
    }
};
