<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('valuation_models')) {
            Schema::create('valuation_models', function (Blueprint $table) {
                $table->id();
                $table->decimal('current_valuation_usd', 15, 2)->default(284000000.00);
                $table->decimal('arr_multiple', 5, 2)->default(12.86);
                $table->decimal('forecast_1yr_valuation_usd', 15, 2)->default(480000000.00);
                $table->decimal('forecast_3yr_valuation_usd', 15, 2)->default(1200000000.00);
                $table->decimal('forecast_5yr_ipo_valuation_usd', 15, 2)->default(5000000000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_models');
    }
};
