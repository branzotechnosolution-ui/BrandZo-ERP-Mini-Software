<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_strategy_plans')) {
            Schema::create('enterprise_strategy_plans', function (Blueprint $table) {
                $table->id();
                $table->string('horizon')->default('1_YEAR_EXCELLENCE');
                $table->string('target_revenue')->default('.4 Million ARR');
                $table->integer('expansion_countries')->default(184);
                $table->string('strategic_focus')->default('Global Healthcare & Enterprise AI Expansion');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_strategy_plans');
    }
};
