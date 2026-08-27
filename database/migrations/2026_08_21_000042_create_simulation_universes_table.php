<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('simulation_universes')) {
            Schema::create('simulation_universes', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_name');
                $table->decimal('predicted_arr', 15, 2)->default(14200000.00);
                $table->decimal('risk_score', 5, 2)->default(0.04);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('simulation_universes');
    }
};
