<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('collaboration_messages')) {
            Schema::create('collaboration_messages', function (Blueprint $table) {
                $table->id();
                $table->string('sender_type')->default('AI_ASSISTANT_AGENT');
                $table->text('message_content')->default('AI Collaboration Assistant: Automatically assigned 4 action items to Q3 sprint board.');
                $table->string('sentiment')->default('POSITIVE_COLLABORATIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('collaboration_messages');
    }
};
