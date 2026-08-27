<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_conversion_metrics_v2')) {
            Schema::create('sales_conversion_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('conversion_code')->default('CNV-MET-2026-9942');
                $table->decimal('conversion_rate_percent', 5, 2)->default(42.80);
                $table->string('pipeline_value_display')->default('+.4M New Opportunity Pipeline');
                $table->string('status')->default('SALES_CONVERSION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_conversion_metrics_v2');
    }
};
