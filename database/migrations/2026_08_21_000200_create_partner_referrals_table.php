<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_referrals')) {
            Schema::create('partner_referrals', function (Blueprint $table) {
                $table->id();
                $table->string('partner_name')->default('Global Cloud Partners LLC');
                $table->string('referred_client')->default('Apex BioTech Solutions');
                $table->decimal('commission_earned_usd', 12, 2)->default(14200.00);
                $table->string('payout_status')->default('PAID_AUTOMATED_TRANSFERS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_referrals');
    }
};
