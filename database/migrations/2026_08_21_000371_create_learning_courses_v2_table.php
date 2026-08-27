<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('learning_courses_v2')) {
            Schema::create('learning_courses_v2', function (Blueprint $table) {
                $table->id();
                $table->string('course_code')->default('CRS-LRN-99420');
                $table->string('course_title')->default('Mastering Autonomous Multimodal AI Agent Architecture');
                $table->decimal('completion_rate_percent', 5, 2)->default(99.80);
                $table->string('status')->default('COURSE_ACTIVE_ENROLLED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('learning_courses_v2');
    }
};
