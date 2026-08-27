<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agents_v3')) {
            Schema::create('ai_agents_v3', function (Blueprint $table) {
                $table->id();
                $table->string('agent_code')->default('AGT-MKT-159-9942');
                $table->integer('published_agents_count')->default(2480);
                $table->string('status')->default('AI_AGENT_MARKETPLACE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agents_v3');
    }
};
