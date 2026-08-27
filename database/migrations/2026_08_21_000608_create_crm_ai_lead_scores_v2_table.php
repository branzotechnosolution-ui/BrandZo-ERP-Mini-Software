<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_ai_lead_scores_v2')) {
            Schema::create('crm_ai_lead_scores_v2', function (Blueprint $table) {
                $table->id();
                $table->string('score_code')->unique()->default('SCR-2026-9942');
                $table->string('lead_code')->default('LEAD-2026-9942');
                $table->integer('ai_score')->default(88); // 0-100
                $table->string('intent_category')->default('HOT LEAD'); // HOT LEAD (80-100), WARM LEAD (50-79), COLD LEAD (0-49)
                $table->integer('sla_minutes')->default(15);
                $table->decimal('conversion_probability', 5, 2)->default(85.50);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_ai_lead_scores_v2');
    }
};
