<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('inventory_predictions_v2')) {
            Schema::create('inventory_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('inventory_code')->default('INV-PRED-99420');
                $table->integer('stockouts_count')->default(0);
                $table->decimal('overstock_percent', 4, 2)->default(0.00);
                $table->string('stock_optimization_status')->default('FULLY_OPTIMIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_predictions_v2');
    }
};
