<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('logistics_metrics_v2')) {
            Schema::create('logistics_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('LOGIST-MET-99420');
                $table->decimal('logistics_efficiency_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_LOGISTICS_DELIVERY_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('logistics_metrics_v2');
    }
};
