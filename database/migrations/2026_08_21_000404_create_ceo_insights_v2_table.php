<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ceo_insights_v2')) {
            Schema::create('ceo_insights_v2', function (Blueprint $table) {
                $table->id();
                $table->string('insight_code')->default('CEO-INS-137-9942');
                $table->decimal('company_health_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_CEO_COPILOT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ceo_insights_v2');
    }
};
