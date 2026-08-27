<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agent_templates')) {
            Schema::create('ai_agent_templates', function (Blueprint $table) {
                $table->id();
                $table->string('template_name')->default('Enterprise Autonomous AI SDR Agent');
                $table->string('role')->default('Sales & Negotiation Lead');
                $table->integer('active_deployments')->default(520000);
                $table->decimal('roi_multiplier', 5, 2)->default(18.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_templates');
    }
};
