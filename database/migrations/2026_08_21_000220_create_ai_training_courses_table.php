<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_training_courses')) {
            Schema::create('ai_training_courses', function (Blueprint $table) {
                $table->id();
                $table->string('course_title')->default('SOP-v4.2 Enterprise Deal Negotiation & Contract Closure');
                $table->string('category')->default('Sales & Negotiation Mastery');
                $table->integer('enrolled_agents')->default(520000);
                $table->decimal('completion_rate', 5, 2)->default(99.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_training_courses');
    }
};
