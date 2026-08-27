<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('war_room_simulations_v2')) {
            Schema::create('war_room_simulations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_code')->default('WAR-ROOM-SIM-99420');
                $table->string('scenario')->default('Aggressive Pricing Attack by Competitor X');
                $table->string('counter_strategy')->default('Autonomous Price Matching + Instant AI Workforce Upsell');
                $table->decimal('win_probability', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('war_room_simulations_v2');
    }
};
