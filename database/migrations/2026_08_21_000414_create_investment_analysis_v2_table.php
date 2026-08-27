<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('investment_analysis_v2')) {
            Schema::create('investment_analysis_v2', function (Blueprint $table) {
                $table->id();
                $table->string('investment_code')->default('INV-ANA-2026-9942');
                $table->string('international_arr_forecast')->default('+.4M ARR Expansion');
                $table->decimal('ltv_cac_ratio', 5, 2)->default(36.90);
                $table->string('status')->default('INVESTMENT_ANALYSIS_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('investment_analysis_v2');
    }
};
