<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sandbox_payment_checks_v2')) {
            Schema::create('sandbox_payment_checks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('payment_check_code')->default('SND-PAY-99420');
                $table->string('gateway')->default('Stripe & Razorpay Local Sandbox');
                $table->string('status')->default('PAYMENT_SANDBOX_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sandbox_payment_checks_v2');
    }
};
