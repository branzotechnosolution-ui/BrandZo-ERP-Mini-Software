<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('budget_intelligence_v2')) {
            Schema::create('budget_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('budget_code')->default('BDG-INT-2026-9942');
                $table->decimal('budget_utilization_percent', 5, 2)->default(84.20);
                $table->decimal('cost_savings_boost', 5, 2)->default(38.40);
                $table->string('status')->default('BUDGET_FULLY_OPTIMIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('budget_intelligence_v2');
    }
};
