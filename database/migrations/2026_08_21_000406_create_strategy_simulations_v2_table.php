<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('strategy_simulations_v2')) {
            Schema::create('strategy_simulations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_code')->default('STRAT-SIM-99420');
                $table->string('revenue_forecast_display')->default('+.4M ARR Expansion');
                $table->decimal('simulation_precision_percent', 5, 2)->default(99.98);
                $table->string('status')->default('STRATEGY_SIMULATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('strategy_simulations_v2');
    }
};
