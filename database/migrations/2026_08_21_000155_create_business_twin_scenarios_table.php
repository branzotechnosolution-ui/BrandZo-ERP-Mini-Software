<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_twin_scenarios')) {
            Schema::create('business_twin_scenarios', function (Blueprint $table) {
                $table->id();
                $table->string('scenario_name')->default('Digital Twin Universe 3.0 APAC Expansion');
                $table->string('simulated_impact')->default('+.2M ARR in Q4 2026');
                $table->decimal('success_probability', 5, 2)->default(98.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_twin_scenarios');
    }
};
