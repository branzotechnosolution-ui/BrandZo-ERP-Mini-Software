<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_performance_reviews')) {
            Schema::create('ai_performance_reviews', function (Blueprint $table) {
                $table->id();
                $table->string('employee_id');
                $table->string('type')->default('AI / Human Hybrid Team');
                $table->decimal('productivity_rating', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_performance_reviews');
    }
};
