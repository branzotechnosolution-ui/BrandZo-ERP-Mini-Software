<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('usage_metrics')) {
            Schema::create('usage_metrics', function (Blueprint $table) {
                $table->id();
                $table->string('customer_id');
                $table->bigInteger('api_calls_count')->default(184000);
                $table->bigInteger('ai_tokens_used')->default(14200000);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('usage_metrics');
    }
};
