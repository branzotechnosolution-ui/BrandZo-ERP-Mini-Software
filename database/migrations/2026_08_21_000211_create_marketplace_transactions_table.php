<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_transactions')) {
            Schema::create('marketplace_transactions', function (Blueprint $table) {
                $table->id();
                $table->string('transaction_id')->default('TXN-MKT-99420');
                $table->decimal('gmv_usd', 12, 2)->default(14200000.00);
                $table->decimal('dev_payout_usd', 12, 2)->default(9940000.00);
                $table->decimal('brandzo_cut_usd', 12, 2)->default(4260000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_transactions');
    }
};
