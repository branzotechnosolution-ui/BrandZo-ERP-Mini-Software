<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agents')) {
            Schema::create('ai_agents', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('category');
                $table->text('description')->nullable();
                $table->decimal('pricing', 8, 2)->default(0.00);
                $table->string('status')->default('active');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('ai_agent_subscriptions')) {
            Schema::create('ai_agent_subscriptions', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id');
                $table->unsignedBigInteger('agent_id');
                $table->string('plan')->default('monthly');
                $table->string('billing_cycle')->default('monthly');
                $table->string('status')->default('active');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_subscriptions');
        Schema::dropIfExists('ai_agents');
    }
};
