<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_metrics')) {
            Schema::create('business_metrics', function (Blueprint $table) {
                $table->id();
                $table->string('metric_key')->default('mrr_arr_ltv_ratio');
                $table->decimal('metric_value', 14, 2)->default(220800000.00);
                $table->string('period')->default('2026-Q3');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_metrics');
    }
};
