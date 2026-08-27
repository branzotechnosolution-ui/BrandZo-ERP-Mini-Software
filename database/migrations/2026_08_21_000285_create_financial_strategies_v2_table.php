<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('financial_strategies_v2')) {
            Schema::create('financial_strategies_v2', function (Blueprint $table) {
                $table->id();
                $table->string('strategy_code')->default('FIN-STRAT-99420');
                $table->string('tax_optimization')->default('100% Tax Efficient Structure Enabled');
                $table->decimal('capital_efficiency_score', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_strategies_v2');
    }
};
