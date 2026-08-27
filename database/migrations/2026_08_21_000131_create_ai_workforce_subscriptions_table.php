<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_workforce_subscriptions')) {
            Schema::create('ai_workforce_subscriptions', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_slug')->default('brandzo-global');
                $table->integer('subscribed_ai_employees')->default(520000);
                $table->decimal('monthly_workforce_fee_usd', 12, 2)->default(184000.00);
                $table->string('status')->default('Enterprise Unlimited Subscription Active');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_workforce_subscriptions');
    }
};
