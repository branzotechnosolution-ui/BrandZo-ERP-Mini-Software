<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('competitor_war_room_logs')) {
            Schema::create('competitor_war_room_logs', function (Blueprint $table) {
                $table->id();
                $table->string('competitor_name')->default('Legacy ERP Competitor X');
                $table->decimal('market_share_gain', 5, 2)->default(14.20);
                $table->string('defense_attack_strategy')->default('Autonomous AI SDR 3.0 Price-Performance Dominance');
                $table->string('threat_level')->default('ZERO_THREAT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('competitor_war_room_logs');
    }
};
