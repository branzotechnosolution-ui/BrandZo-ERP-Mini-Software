<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('product_quality_metrics_v2')) {
            Schema::create('product_quality_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->decimal('code_precision_percent', 5, 2)->default(99.98);
                $table->decimal('error_rate_percent', 5, 3)->default(0.001);
                $table->decimal('sla_uptime_percent', 6, 3)->default(99.999);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('product_quality_metrics_v2');
    }
};
