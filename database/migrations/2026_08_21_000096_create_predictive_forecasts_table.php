<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('predictive_forecasts')) {
            Schema::create('predictive_forecasts', function (Blueprint $table) {
                $table->id();
                $table->string('forecast_type')->default('Revenue & Cash Flow 12-Month Forecast');
                $table->decimal('predicted_value_usd', 14, 2)->default(28400000.00);
                $table->integer('accuracy_percentage')->default(98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('predictive_forecasts');
    }
};
