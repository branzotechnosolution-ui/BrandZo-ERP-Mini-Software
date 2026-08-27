<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('billing_webhooks')) {
            Schema::create('billing_webhooks', function (Blueprint $table) {
                $table->id();
                $table->string('event_id');
                $table->string('gateway')->default('Razorpay / Stripe');
                $table->string('event_type')->default('invoice.payment_succeeded');
                $table->json('payload')->nullable();
                $table->string('status')->default('Processed');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('billing_webhooks');
    }
};
