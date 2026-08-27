<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('investment_models')) {
            Schema::create('investment_models', function (Blueprint $table) {
                $table->id();
                $table->string('valuation_stage')->default('Series C Capital Readiness');
                $table->decimal('predicted_valuation_usd', 12, 2)->default(284000000.00);
                $table->decimal('funding_readiness_score', 5, 2)->default(98.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('investment_models');
    }
};
