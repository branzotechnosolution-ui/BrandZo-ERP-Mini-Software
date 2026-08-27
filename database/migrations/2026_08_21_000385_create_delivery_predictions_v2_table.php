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
                $table->string('delivery_code')->default('DELIV-PRED-99420');
                $table->decimal('on_time_delivery_forecast', 5, 2)->default(100.00);
                $table->string('status')->default('AI_PROJECT_MANAGEMENT_EXECUTION_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_predictions_v2');
    }
};
