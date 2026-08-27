<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_optimization_logs_v2')) {
            Schema::create('revenue_optimization_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('optimization_type')->default('Dynamic AI Tier Pricing & Metered Invoicing');
                $table->decimal('mrr_crores', 10, 2)->default(1.84);
                $table->decimal('arr_crores', 10, 2)->default(22.08);
                $table->decimal('profit_margin_percent', 5, 2)->default(42.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_optimization_logs_v2');
    }
};
