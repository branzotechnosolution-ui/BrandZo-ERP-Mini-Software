<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workforce_strategies_v2')) {
            Schema::create('workforce_strategies_v2', function (Blueprint $table) {
                $table->id();
                $table->string('strategy_code')->default('WF-STRAT-99420');
                $table->decimal('productivity_score', 5, 2)->default(99.40);
                $table->integer('talent_bottlenecks_count')->default(0);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workforce_strategies_v2');
    }
};
