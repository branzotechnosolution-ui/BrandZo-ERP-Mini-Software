<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_workforce_metrics_v2')) {
            Schema::create('ai_workforce_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('workforce_code')->default('WFK-MTR-99420');
                $table->integer('active_ai_workforce_agents_count')->default(48200);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_AI_AGENT_MARKETPLACE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_workforce_metrics_v2');
    }
};
