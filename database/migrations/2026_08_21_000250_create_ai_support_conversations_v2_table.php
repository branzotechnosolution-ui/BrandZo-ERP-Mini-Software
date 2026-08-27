<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_support_conversations_v2')) {
            Schema::create('ai_support_conversations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('conversation_code')->default('AI-SUPP-111-9942');
                $table->string('channel')->default('Omnichannel AI Support Desk');
                $table->decimal('resolution_mins', 5, 2)->default(1.42);
                $table->string('status')->default('AUTONOMOUSLY_RESOLVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_support_conversations_v2');
    }
};
