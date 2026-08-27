<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_messages_v2')) {
            Schema::create('enterprise_messages_v2', function (Blueprint $table) {
                $table->id();
                $table->string('msg_code')->default('MSG-ENT-132-9942');
                $table->string('sender_role')->default('AI_COLLABORATION_ASSISTANT');
                $table->integer('active_conversations')->default(38400);
                $table->string('status')->default('REALTIME_ENCRYPTED_MESSAGING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_messages_v2');
    }
};
