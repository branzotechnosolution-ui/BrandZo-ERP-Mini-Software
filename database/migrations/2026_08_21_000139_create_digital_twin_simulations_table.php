<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('digital_twin_simulations')) {
            Schema::create('digital_twin_simulations', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_name')->default('Digital Twin Universe 2.0 Scenario 100.0');
                $table->string('predicted_outcome')->default('+.4M ARR Growth in 12 Months');
                $table->decimal('confidence_score', 5, 2)->default(99.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('digital_twin_simulations');
    }
};
