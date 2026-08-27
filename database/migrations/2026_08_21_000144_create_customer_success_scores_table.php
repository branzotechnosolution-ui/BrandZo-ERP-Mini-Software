<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_success_scores')) {
            Schema::create('customer_success_scores', function (Blueprint $table) {
                $table->id();
                $table->string('customer_id')->default('CUST-8492');
                $table->decimal('health_score', 5, 2)->default(99.60);
                $table->string('renewal_prediction')->default('100% Guaranteed Renewal');
                $table->string('churn_risk')->default('ULTRA_LOW');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_success_scores');
    }
};
