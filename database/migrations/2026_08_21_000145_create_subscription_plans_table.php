<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('subscription_plans')) {
            Schema::create('subscription_plans', function (Blueprint $table) {
                $table->id();
                $table->string('plan_name')->default('Enterprise Unlimited SLA Tier');
                $table->decimal('monthly_price_usd', 10, 2)->default(14999.00);
                $table->string('billing_type')->default('Monthly / Metered Usage');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
