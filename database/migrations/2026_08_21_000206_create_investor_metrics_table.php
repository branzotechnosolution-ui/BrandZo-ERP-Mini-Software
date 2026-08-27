<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('investor_metrics')) {
            Schema::create('investor_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('valuation_usd', 12, 2)->default(284000000.00);
                $table->decimal('arr_crores', 12, 2)->default(22.08);
                $table->integer('runway_months')->default(48);
                $table->decimal('gross_margin', 5, 2)->default(84.20);
                $table->string('funding_readiness_score')->default('SERIES_B_FUNDING_READY_100');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('investor_metrics');
    }
};
