<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_payouts_v2')) {
            Schema::create('partner_payouts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('payout_code')->default('PAYOUT-PTR-99420');
                $table->string('payout_method')->default('INSTANT_CRYPTOGRAPHIC_BANK_WIRE');
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_PARTNER_NETWORK_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_payouts_v2');
    }
};
