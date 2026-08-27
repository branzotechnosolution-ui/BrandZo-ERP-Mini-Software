<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('employee_skills_v2')) {
            Schema::create('employee_skills_v2', function (Blueprint $table) {
                $table->id();
                $table->string('skill_code')->default('SKL-EMP-2026-9942');
                $table->decimal('skills_gap_percent', 5, 2)->default(0.00);
                $table->decimal('learning_score', 5, 2)->default(99.40);
                $table->string('status')->default('SKILLS_FULLY_MATRIXED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_skills_v2');
    }
};
