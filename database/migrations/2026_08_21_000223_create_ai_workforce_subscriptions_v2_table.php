<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_workforce_subscriptions_v2')) {
            Schema::create('ai_workforce_subscriptions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('subscription_plan')->default('ENTERPRISE_UNLIMITED_AI_WORKFORCE');
                $table->integer('allocated_seats')->default(520000);
                $table->decimal('monthly_cost_usd', 12, 2)->default(14999.00);
                $table->string('status')->default('ACTIVE_AUTO_RENEWAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_workforce_subscriptions_v2');
    }
};
