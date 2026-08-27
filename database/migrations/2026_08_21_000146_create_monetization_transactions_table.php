<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('monetization_transactions')) {
            Schema::create('monetization_transactions', function (Blueprint $table) {
                $table->id();
                $table->string('transaction_id')->default('TXN-REV-99420');
                $table->decimal('amount_inr', 12, 2)->default(184000.00);
                $table->string('payment_gateway')->default('Razorpay Enterprise / Stripe Billing');
                $table->string('status')->default('PAID_SUCCESS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('monetization_transactions');
    }
};
