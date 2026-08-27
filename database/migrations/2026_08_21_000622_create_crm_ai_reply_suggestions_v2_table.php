<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_ai_reply_suggestions_v2')) {
            Schema::create('crm_ai_reply_suggestions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('reply_code')->default('RPL-AI-99420');
                $table->string('channel')->default('WhatsApp'); // WhatsApp, Email
                $table->text('suggested_reply')->default('Hi Alex, following up on our Enterprise ERP demo! We can accommodate your 500+ seat rollout schedule smoothly.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_ai_reply_suggestions_v2');
    }
};
