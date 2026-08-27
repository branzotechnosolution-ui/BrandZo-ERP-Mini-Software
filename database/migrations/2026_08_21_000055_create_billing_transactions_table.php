<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('billing_transactions')) {
            Schema::create('billing_transactions', function (Blueprint $table) {
                $table->id();
                $table->string('transaction_ref');
                $table->string('payment_gateway')->default('Stripe / Razorpay');
                $table->decimal('amount', 12, 2)->default(4999.00);
                $table->string('status')->default('Success');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('billing_transactions');
    }
};
