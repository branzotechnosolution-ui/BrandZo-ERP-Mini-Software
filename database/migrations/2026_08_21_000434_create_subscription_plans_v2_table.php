<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('subscription_plans_v2')) {
            Schema::create('subscription_plans_v2', function (Blueprint $table) {
                $table->id();
                $table->string('plan_code')->default('PLAN-ENT-142-9942');
                $table->string('plan_name')->default('Enterprise Unlimited Multimodal AI Suite');
                $table->decimal('monthly_price_usd', 10, 2)->default(4999.00);
                $table->string('status')->default('SUBSCRIPTION_PLAN_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('subscription_plans_v2');
    }
};
