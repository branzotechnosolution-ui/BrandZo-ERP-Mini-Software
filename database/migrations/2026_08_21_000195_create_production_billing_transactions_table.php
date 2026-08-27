<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('production_billing_transactions')) {
            Schema::create('production_billing_transactions', function (Blueprint $table) {
                $table->id();
                $table->string('gateway')->default('Razorpay / Stripe Live Integration');
                $table->decimal('amount_usd', 12, 2)->default(14999.00);
                $table->string('gst_invoice_number')->default('INV-GST-2026-99420');
                $table->string('status')->default('PAID_AUTOMATED_RECEIPT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('production_billing_transactions');
    }
};
