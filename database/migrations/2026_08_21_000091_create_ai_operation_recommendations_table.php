<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_operation_recommendations')) {
            Schema::create('ai_operation_recommendations', function (Blueprint $table) {
                $table->id();
                $table->string('recommendation_title')->default('Reallocate 4 Developers to Q3 High-Priority Milestone');
                $table->string('ai_coo_insight')->default('Predicts 98.4% chance of on-time delivery');
                $table->integer('impact_score')->default(95);
                $table->string('status')->default('Active Recommendation');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_operation_recommendations');
    }
};
