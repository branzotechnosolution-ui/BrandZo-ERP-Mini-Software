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
                $table->string('health_code')->default('HLT-SCR-155-9942');
                $table->decimal('average_health_score', 5, 2)->default(96.80);
                $table->string('status')->default('CUSTOMER_HEALTH_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_health_scores_v2');
    }
};
