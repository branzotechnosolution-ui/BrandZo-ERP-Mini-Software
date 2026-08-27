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
                $table->string('health_code')->default('HLT-CX-99420');
                $table->decimal('customer_health_score', 5, 2)->default(99.80);
                $table->decimal('csat_score', 5, 2)->default(99.60);
                $table->string('status')->default('PEAK_CUSTOMER_HEALTH');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_health_scores_v2');
    }
};
