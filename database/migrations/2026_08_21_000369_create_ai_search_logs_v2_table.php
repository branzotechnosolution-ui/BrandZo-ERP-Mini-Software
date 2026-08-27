<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_search_logs_v2')) {
            Schema::create('ai_search_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('search_code')->default('SRCH-AI-99420');
                $table->integer('monthly_searches')->default(1840000);
                $table->decimal('latency_ms', 5, 2)->default(1.42);
                $table->string('status')->default('SEMANTIC_SEARCH_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_search_logs_v2');
    }
};
