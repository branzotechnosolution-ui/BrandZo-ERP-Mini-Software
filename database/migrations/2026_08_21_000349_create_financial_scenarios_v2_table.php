<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('financial_scenarios_v2')) {
            Schema::create('financial_scenarios_v2', function (Blueprint $table) {
                $table->id();
                $table->string('scenario_code')->default('SCN-MET-99420');
                $table->decimal('simulation_precision', 5, 2)->default(99.80);
                $table->string('status')->default('AI_BANKING_TREASURY_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_scenarios_v2');
    }
};
