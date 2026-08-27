<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('training_progress_v2')) {
            Schema::create('training_progress_v2', function (Blueprint $table) {
                $table->id();
                $table->string('progress_code')->default('PRG-TRN-2026-9942');
                $table->decimal('completion_rate_percent', 5, 2)->default(98.40);
                $table->string('status')->default('TRAINING_PROGRESS_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('training_progress_v2');
    }
};
