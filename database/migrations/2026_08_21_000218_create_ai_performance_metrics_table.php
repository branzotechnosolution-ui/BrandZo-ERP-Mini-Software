<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_performance_metrics_v2')) {
            Schema::create('ai_performance_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('tokens_processed_24h')->default(142000000);
                $table->decimal('cost_savings_percent', 5, 2)->default(38.40);
                $table->decimal('task_success_rate', 5, 2)->default(99.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_performance_metrics_v2');
    }
};
