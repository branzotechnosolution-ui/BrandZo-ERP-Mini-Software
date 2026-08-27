<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_insights')) {
            Schema::create('ai_insights', function (Blueprint $table) {
                $table->id();
                $table->string('insight_title')->default('Predictive Upsell Pattern Detected in Healthcare Sector');
                $table->text('explainable_reasoning')->nullable();
                $table->string('priority')->default('EXECUTIVE_CRITICAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_insights');
    }
};
