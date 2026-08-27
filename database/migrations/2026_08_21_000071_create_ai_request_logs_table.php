<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_request_logs')) {
            Schema::create('ai_request_logs', function (Blueprint $table) {
                $table->id();
                $table->string('request_id');
                $table->string('provider')->default('OpenAI / Claude / Gemini');
                $table->string('model')->default('gpt-4o');
                $table->integer('tokens_used')->default(1420);
                $table->decimal('cost_usd', 8, 4)->default(0.0042);
                $table->string('status')->default('Completed');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_request_logs');
    }
};
