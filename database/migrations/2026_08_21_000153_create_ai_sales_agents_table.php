<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_sales_agents')) {
            Schema::create('ai_sales_agents', function (Blueprint $table) {
                $table->id();
                $table->string('agent_name')->default('AI Lead Sales Executive #01');
                $table->string('specialization')->default('Enterprise SLA Deal Negotiation');
                $table->decimal('deals_closed_value_usd', 12, 2)->default(14200000.00);
                $table->decimal('negotiation_precision', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_sales_agents');
    }
};
