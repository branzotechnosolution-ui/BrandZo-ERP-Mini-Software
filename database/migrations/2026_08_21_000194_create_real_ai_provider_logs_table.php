<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('real_ai_provider_logs')) {
            Schema::create('real_ai_provider_logs', function (Blueprint $table) {
                $table->id();
                $table->string('ai_provider')->default('OpenAI GPT-4o / Claude 3.5 / Gemini 1.5 Pro');
                $table->string('vector_database')->default('Pinecone / Milvus Vector RAG');
                $table->integer('tokens_processed')->default(1420000);
                $table->decimal('latency_ms', 6, 2)->default(14.20);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('real_ai_provider_logs');
    }
};
