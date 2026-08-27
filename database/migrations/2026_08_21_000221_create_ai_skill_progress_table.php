<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_skill_progress')) {
            Schema::create('ai_skill_progress', function (Blueprint $table) {
                $table->id();
                $table->string('employee_id')->default('AI-EMP-99420');
                $table->string('skill_name')->default('Autonomous Multilingual Proposal Generation');
                $table->integer('proficiency_level')->default(100);
                $table->decimal('precision_boost', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_skill_progress');
    }
};
