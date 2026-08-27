<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agents_marketplace_v3')) {
            Schema::create('ai_agents_marketplace_v3', function (Blueprint $table) {
                $table->id();
                $table->string('agent_title')->default('Autonomous Healthcare Billing AI Specialist');
                $table->string('category')->default('Finance / Healthcare Agent');
                $table->decimal('monthly_subscription_usd', 10, 2)->default(299.00);
                $table->decimal('rating_score', 3, 2)->default(4.98);
                $table->integer('active_deployments')->default(3840);
                $table->string('status')->default('Published & Verified');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agents_marketplace_v3');
    }
};
