<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_meeting_records_v2')) {
            Schema::create('ai_meeting_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('meeting_code')->default('MTG-AI-99420');
                $table->integer('meetings_today')->default(142);
                $table->decimal('transcription_accuracy_percent', 5, 2)->default(99.98);
                $table->string('status')->default('MEETING_ASSISTANT_MONITORING');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_meeting_records_v2');
    }
};
