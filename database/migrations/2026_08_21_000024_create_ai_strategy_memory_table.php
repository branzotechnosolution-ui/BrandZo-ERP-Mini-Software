<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_strategy_memory')) {
            Schema::create('ai_strategy_memory', function (Blueprint $table) {
                $table->id();
                $table->string('strategy_key');
                $table->text('historical_insight')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_strategy_memory');
    }
};
