<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_sales_strategies_v2')) {
            Schema::create('ai_sales_strategies_v2', function (Blueprint $table) {
                $table->id();
                $table->string('strategy_code')->default('STRAT-AI-SALES-9942');
                $table->string('title')->default('Autonomous Multilingual Sales Outreach & Proposal Generation');
                $table->decimal('lead_priority_score', 5, 2)->default(98.40);
                $table->string('assigned_sdr_squad')->default('AI SDR Squad 3.0');
                $table->string('status')->default('ACTIVE_EXECUTING');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_sales_strategies_v2');
    }
};
