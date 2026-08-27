<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_expansion_records_v2')) {
            Schema::create('customer_expansion_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name')->default('Apollo Healthcare Enterprise Tier');
                $table->decimal('health_score', 5, 2)->default(99.60);
                $table->decimal('net_retention_rate', 5, 2)->default(138.40);
                $table->string('upsell_recommendation')->default('Upgrade to AI Workforce 3.0 Unlimited Tier');
                $table->string('churn_risk')->default('ULTRA_LOW');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_expansion_records_v2');
    }
};
