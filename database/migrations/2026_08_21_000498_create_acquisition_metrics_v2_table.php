<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('acquisition_metrics_v2')) {
            Schema::create('acquisition_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('acquisition_code')->default('ACQ-MTR-2026-9942');
                $table->decimal('customer_acquisition_cost_usd', 10, 2)->default(142.00);
                $table->decimal('ltv_cac_ratio', 5, 2)->default(14.80);
                $table->string('status')->default('CUSTOMER_ACQUISITION_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('acquisition_metrics_v2');
    }
};
