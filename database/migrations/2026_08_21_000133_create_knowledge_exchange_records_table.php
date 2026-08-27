<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_exchange_records')) {
            Schema::create('knowledge_exchange_records', function (Blueprint $table) {
                $table->id();
                $table->string('exchange_topic')->default('SaaS NRR & Expansion Strategy 2026');
                $table->string('privacy_mode')->default('Zero-Knowledge Anonymous Exchange');
                $table->decimal('benchmark_score', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_exchange_records');
    }
};
