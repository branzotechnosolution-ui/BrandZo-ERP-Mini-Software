<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('skill_assessments_v2')) {
            Schema::create('skill_assessments_v2', function (Blueprint $table) {
                $table->id();
                $table->string('assessment_code')->default('SKL-ASM-99420');
                $table->decimal('student_mastery_score', 5, 2)->default(99.80);
                $table->string('status')->default('SKILL_ASSESSMENT_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('skill_assessments_v2');
    }
};
