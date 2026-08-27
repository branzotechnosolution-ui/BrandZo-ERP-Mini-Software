<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('payment_transactions_v2')) {
            Schema::create('payment_transactions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('transaction_code')->default('TXN-PAY-126-9942');
                $table->decimal('amount_usd', 12, 2)->default(1499.00);
                $table->string('payment_gateway')->default('Razorpay Enterprise / Stripe');
                $table->string('status')->default('TRANSACTION_SUCCESS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_transactions_v2');
    }
};
