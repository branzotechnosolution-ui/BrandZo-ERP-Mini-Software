<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('meeting_summaries_v2')) {
            Schema::create('meeting_summaries_v2', function (Blueprint $table) {
                $table->id();
                $table->string('summary_code')->default('SUMM-MTG-99420');
                $table->integer('ai_summaries_count')->default(18400);
                $table->decimal('summary_precision_percent', 5, 2)->default(99.80);
                $table->string('status')->default('DECISIONS_TRACKED_AUTONOMOUSLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('meeting_summaries_v2');
    }
};
