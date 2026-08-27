<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('live_billing_logs_v2')) {
            Schema::create('live_billing_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('billing_code')->default('BILL-LOG-99420');
                $table->string('gateways')->default('Stripe, Razorpay, PayPal');
                $table->string('status')->default('LIVE_SAAS_BILLING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('live_billing_logs_v2');
    }
};
