<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('funding_opportunities')) {
            Schema::create('funding_opportunities', function (Blueprint $table) {
                $table->id();
                $table->string('round_name')->default('Series B Global Growth Round');
                $table->decimal('target_amount_usd', 15, 2)->default(50000000.00);
                $table->decimal('pre_money_valuation_usd', 15, 2)->default(284000000.00);
                $table->decimal('opportunity_score', 5, 2)->default(99.60);
                $table->string('status')->default('OPEN_COMMITTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('funding_opportunities');
    }
};
