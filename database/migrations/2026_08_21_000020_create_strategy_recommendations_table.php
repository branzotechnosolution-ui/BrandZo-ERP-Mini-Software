<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('strategy_recommendations')) {
            Schema::create('strategy_recommendations', function (Blueprint $table) {
                $table->id();
                $table->string('recommendation');
                $table->string('impact_level')->default('High ROI');
                $table->decimal('confidence_score', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('strategy_recommendations');
    }
};
