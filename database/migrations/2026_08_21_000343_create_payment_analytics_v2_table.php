<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('payment_analytics_v2')) {
            Schema::create('payment_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytic_code')->default('PAY-MET-99420');
                $table->decimal('payment_intelligence_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_PAYMENT_DIGITAL_FINANCE_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_analytics_v2');
    }
};
