<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('growth_strategy_v2')) {
            Schema::create('growth_strategy_v2', function (Blueprint $table) {
                $table->id();
                $table->string('strategy_code')->default('GROWTH-STRAT-99420');
                $table->integer('growth_recommendations_count')->default(384);
                $table->string('status')->default('AI_GLOBAL_EXPANSION_MARKET_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('growth_strategy_v2');
    }
};
