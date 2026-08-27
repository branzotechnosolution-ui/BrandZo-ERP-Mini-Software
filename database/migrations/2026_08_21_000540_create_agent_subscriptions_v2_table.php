<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_subscriptions_v2')) {
            Schema::create('agent_subscriptions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('subscription_code')->default('SUB-AGT-2026-9942');
                $table->decimal('agent_subscription_arr_usd', 12, 2)->default(34200000.00);
                $table->string('status')->default('AGENT_SUBSCRIPTION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_subscriptions_v2');
    }
};
