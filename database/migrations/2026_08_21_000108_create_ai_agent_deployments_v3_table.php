<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agent_deployments_v3')) {
            Schema::create('ai_agent_deployments_v3', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_slug');
                $table->string('agent_id');
                $table->string('environment')->default('Production Tenant Workspace');
                $table->string('health_status')->default('100% Operational');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_deployments_v3');
    }
};
