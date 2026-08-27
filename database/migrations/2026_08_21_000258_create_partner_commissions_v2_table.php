<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_commissions_v2')) {
            Schema::create('partner_commissions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('revenue_share_model')->default('70% Partner / 30% BrandZo');
                $table->decimal('commissions_paid_crores', 10, 2)->default(4.28);
                $table->string('payout_status')->default('AUTOMATED_PAYOUT_CLEAN');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_commissions_v2');
    }
};
