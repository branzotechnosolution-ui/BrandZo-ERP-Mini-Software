<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('market_simulations')) {
            Schema::create('market_simulations', function (Blueprint $table) {
                $table->id();
                $table->string('market_region')->default('APAC / LATAM Cloud Market');
                $table->string('competitor_analysis')->default('BrandZo maintains 42.8% market share dominance');
                $table->string('customer_demand_trend')->default('+38.4% Surge in Enterprise AI SDR Demand');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('market_simulations');
    }
};
