<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_satisfaction_v2')) {
            Schema::create('customer_satisfaction_v2', function (Blueprint $table) {
                $table->id();
                $table->string('csat_code')->default('CSAT-SUP-2026-9942');
                $table->decimal('csat_score', 3, 2)->default(4.98);
                $table->string('status')->default('CUSTOMER_SATISFACTION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_satisfaction_v2');
    }
};
