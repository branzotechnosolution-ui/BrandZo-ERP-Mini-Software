<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_models_v2')) {
            Schema::create('ai_models_v2', function (Blueprint $table) {
                $table->id();
                $table->string('model_name')->default('BrandZo-LLM-Healthcare-v4');
                $table->string('provider')->default('OpenAI / Anthropic / Gemini / Custom Llama-3');
                $table->decimal('accuracy_score', 5, 2)->default(99.98);
                $table->decimal('latency_ms', 5, 2)->default(14.20);
                $table->string('status')->default('DEPLOYED_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_models_v2');
    }
};
