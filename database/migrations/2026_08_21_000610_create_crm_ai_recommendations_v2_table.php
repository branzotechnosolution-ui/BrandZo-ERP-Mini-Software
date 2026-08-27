<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_ai_recommendations_v2')) {
            Schema::create('crm_ai_recommendations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('recommendation_code')->default('REC-2026-9942');
                $table->string('lead_code')->default('LEAD-2026-9942');
                $table->text('score_reason')->default('High budget (,000) & urgent deployment timeline.');
                $table->text('recommended_action')->default('Schedule immediate discovery call within 15 mins.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_ai_recommendations_v2');
    }
};
