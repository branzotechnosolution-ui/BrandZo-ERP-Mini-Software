<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('support_agents_v2')) {
            Schema::create('support_agents_v2', function (Blueprint $table) {
                $table->id();
                $table->string('agent_code')->default('AGENT-SUP-99420');
                $table->integer('autonomous_ai_agents_count')->default(384);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_SUPPORT_INTELLIGENCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('support_agents_v2');
    }
};
