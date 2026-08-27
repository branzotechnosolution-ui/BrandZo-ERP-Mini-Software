<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_chat_sessions_v2')) {
            Schema::create('ai_chat_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('session_code')->default('CHAT-AI-99420');
                $table->integer('monthly_sessions')->default(184000);
                $table->decimal('intent_accuracy_percent', 5, 2)->default(99.80);
                $table->string('status')->default('24_7_AUTONOMOUS_SUPPORT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_chat_sessions_v2');
    }
};
