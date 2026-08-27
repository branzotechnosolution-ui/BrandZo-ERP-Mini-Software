<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_sales_metrics_v2')) {
            Schema::create('global_sales_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('pipeline_code')->default('SALES-PIPE-2026-9942');
                $table->decimal('sales_pipeline_usd', 12, 2)->default(482000000.00);
                $table->string('status')->default('GLOBAL_SALES_PIPELINE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_sales_metrics_v2');
    }
};
