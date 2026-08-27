<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agent_usage_logs_v3')) {
            Schema::create('ai_agent_usage_logs_v3', function (Blueprint $table) {
                $table->id();
                $table->string('agent_id');
                $table->integer('tasks_executed_24h')->default(1420);
                $table->integer('tokens_consumed')->default(1420000);
                $table->decimal('cost_usd', 8, 4)->default(4.2800);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_usage_logs_v3');
    }
};
