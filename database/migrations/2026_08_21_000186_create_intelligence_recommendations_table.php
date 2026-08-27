<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('intelligence_recommendations')) {
            Schema::create('intelligence_recommendations', function (Blueprint $table) {
                $table->id();
                $table->string('recommendation_title')->default('Expand Enterprise Healthcare AI SDR Workforce');
                $table->string('impact_category')->default('REVENUE_GROWTH_REDUCTION_RISK');
                $table->decimal('projected_arr_boost_usd', 12, 2)->default(28400000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('intelligence_recommendations');
    }
};
