<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_instructor_sessions_v2')) {
            Schema::create('ai_instructor_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('instructor_code')->default('AI-INST-99420');
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_TRAINING_ACADEMY_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_instructor_sessions_v2');
    }
};
