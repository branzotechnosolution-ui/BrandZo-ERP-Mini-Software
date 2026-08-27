<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_metrics')) {
            Schema::create('revenue_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('mrr', 15, 2)->default(18400000.00);
                $table->decimal('arr', 15, 2)->default(220800000.00);
                $table->decimal('ltv', 12, 2)->default(142000.00);
                $table->decimal('cac', 12, 2)->default(3840.00);
                $table->decimal('churn_rate', 5, 2)->default(0.42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_metrics');
    }
};
