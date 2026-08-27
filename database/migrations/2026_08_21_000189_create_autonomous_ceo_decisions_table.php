<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_ceo_decisions')) {
            Schema::create('autonomous_ceo_decisions', function (Blueprint $table) {
                $table->id();
                $table->string('decision_title')->default('Master Singularity Activation & .4M ARR Expansion');
                $table->string('strategy_summary')->default('Fully autonomous global enterprise management active across 184 countries.');
                $table->decimal('confidence_score', 5, 2)->default(100.00);
                $table->string('execution_status')->default('EXECUTED_MASTER_SINGULARITY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_ceo_decisions');
    }
};
