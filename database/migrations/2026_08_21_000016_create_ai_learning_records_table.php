<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_learning_records')) {
            Schema::create('ai_learning_records', function (Blueprint $table) {
                $table->id();
                $table->string('learning_source');
                $table->text('sop_generated')->nullable();
                $table->decimal('confidence_score', 5, 2)->default(99.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_learning_records');
    }
};
