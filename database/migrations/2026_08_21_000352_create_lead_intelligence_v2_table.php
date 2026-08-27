<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('lead_intelligence_v2')) {
            Schema::create('lead_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('lead_code')->default('LEAD-AI-99420');
                $table->decimal('lead_qualification_score', 5, 2)->default(94.20);
                $table->integer('monthly_qualified_leads')->default(18400);
                $table->string('status')->default('PROSPECT_DISCOVERED_AI_SDR');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_intelligence_v2');
    }
};
