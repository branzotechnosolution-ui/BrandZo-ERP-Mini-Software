<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_provider_keys')) {
            Schema::create('ai_provider_keys', function (Blueprint $table) {
                $table->id();
                $table->string('provider')->default('OpenAI');
                $table->string('api_key_masked')->default('sk-prod-****-8420');
                $table->string('status')->default('Active');
                $table->decimal('monthly_budget_usd', 10, 2)->default(5000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_provider_keys');
    }
};
