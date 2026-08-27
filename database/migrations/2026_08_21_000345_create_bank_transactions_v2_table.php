<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('bank_transactions_v2')) {
            Schema::create('bank_transactions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('bank_txn_code')->default('BANK-TXN-99420');
                $table->decimal('amount_usd', 12, 2)->default(142000.00);
                $table->string('categorization')->default('CORPORATE_TREASURY_TRANSFER');
                $table->string('reconciliation_status')->default('AUTONOMOUSLY_RECONCILED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('bank_transactions_v2');
    }
};
