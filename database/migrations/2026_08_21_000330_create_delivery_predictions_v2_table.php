<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('delivery_predictions_v2')) {
            Schema::create('delivery_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prediction_code')->default('DELIV-PRED-2026-9942');
                $table->decimal('eta_precision_percent', 5, 2)->default(99.80);
                $table->integer('predicted_delays_count')->default(0);
                $table->string('status')->default('ZERO_DELAYS_PREDICTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_predictions_v2');
    }
};
