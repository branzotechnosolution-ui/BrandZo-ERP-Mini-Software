<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('billing_transactions_v2')) {
            Schema::create('billing_transactions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('transaction_code')->default('BILL-TXN-99420');
                $table->decimal('amount_paid_usd', 10, 2)->default(4999.00);
                $table->string('payment_status')->default('PAID_SUCCESSFUL');
                $table->string('status')->default('BILLING_TRANSACTION_COMPLETED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('billing_transactions_v2');
    }
};
