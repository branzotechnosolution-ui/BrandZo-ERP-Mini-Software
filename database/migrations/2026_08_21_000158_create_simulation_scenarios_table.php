<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('simulation_scenarios')) {
            Schema::create('simulation_scenarios', function (Blueprint $table) {
                $table->id();
                $table->string('scenario_name')->default('Scenario #100: APAC Healthcare Expansion');
                $table->string('scenario_type')->default('WHAT_IF_REVENUE_GROWTH');
                $table->decimal('simulated_arr_impact_usd', 12, 2)->default(48400000.00);
                $table->decimal('confidence_score', 5, 2)->default(99.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('simulation_scenarios');
    }
};
