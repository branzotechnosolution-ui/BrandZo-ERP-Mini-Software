<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_health_scores_v2')) {
            Schema::create('customer_health_scores_v2', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name')->default('Apollo Enterprise Tier');
                $table->decimal('health_score', 5, 2)->default(99.40);
                $table->decimal('churn_probability_percent', 5, 2)->default(0.42);
                $table->string('churn_risk_level')->default('ULTRA_LOW');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_health_scores_v2');
    }
};
