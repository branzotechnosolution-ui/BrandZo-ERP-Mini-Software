<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_referrals_v2')) {
            Schema::create('partner_referrals_v2', function (Blueprint $table) {
                $table->id();
                $table->string('referral_code')->default('REF-PTR-99420');
                $table->integer('referral_leads_count')->default(42800);
                $table->integer('converted_customers_count')->default(18400);
                $table->string('status')->default('REFERRAL_CONVERSION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_referrals_v2');
    }
};
