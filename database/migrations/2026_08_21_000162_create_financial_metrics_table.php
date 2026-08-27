<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('financial_metrics')) {
            Schema::create('financial_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('mrr_inr', 12, 2)->default(18400000.00);
                $table->decimal('arr_inr', 12, 2)->default(220800000.00);
                $table->decimal('gross_profit_margin', 5, 2)->default(84.20);
                $table->decimal('net_profit_margin', 5, 2)->default(42.80);
                $table->integer('cash_runway_months')->default(48);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_metrics');
    }
};
