<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('training_courses_v2')) {
            Schema::create('training_courses_v2', function (Blueprint $table) {
                $table->id();
                $table->string('course_code')->default('CRS-TRN-149-9942');
                $table->integer('courses_count')->default(384);
                $table->string('status')->default('TRAINING_ACADEMY_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('training_courses_v2');
    }
};
