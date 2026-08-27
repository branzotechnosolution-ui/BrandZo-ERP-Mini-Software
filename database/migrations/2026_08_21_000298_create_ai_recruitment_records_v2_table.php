<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_recruitment_records_v2')) {
            Schema::create('ai_recruitment_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('candidate_code')->default('CAND-AI-99420');
                $table->string('candidate_name')->default('Lead Multimodal AI Engineer');
                $table->decimal('screening_match_percent', 5, 2)->default(98.40);
                $table->string('onboarding_status')->default('INSTANT_SOP_ONBOARDED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_recruitment_records_v2');
    }
};
