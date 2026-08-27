<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_learning_history')) {
            Schema::create('ai_learning_history', function (Blueprint $table) {
                $table->id();
                $table->string('topic');
                $table->decimal('knowledge_gain', 5, 2)->default(14.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_learning_history');
    }
};
