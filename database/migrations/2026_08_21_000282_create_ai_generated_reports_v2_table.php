<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_generated_reports_v2')) {
            Schema::create('ai_generated_reports_v2', function (Blueprint $table) {
                $table->id();
                $table->string('report_code')->default('RPT-AI-2026-9942');
                $table->string('title')->default('Q3 Executive Board & Financial Intelligence Briefing');
                $table->string('format')->default('PDF / HTML5 Interactive Dashboard');
                $table->string('status')->default('AUTONOMOUSLY_GENERATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_generated_reports_v2');
    }
};
