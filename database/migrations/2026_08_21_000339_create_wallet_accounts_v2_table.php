<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('wallet_accounts_v2')) {
            Schema::create('wallet_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('wallet_code')->default('WLT-AI-99420');
                $table->decimal('wallet_balance_usd', 12, 2)->default(4280000.00);
                $table->string('account_type')->default('MERCHANT_CUSTOMER_HYBRID');
                $table->string('status')->default('WALLET_ACTIVE_SECURE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('wallet_accounts_v2');
    }
};
