<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('capital_plans')) {
            Schema::create('capital_plans', function (Blueprint $table) {
                $table->id();
                $table->string('plan_code')->default('CAP-PLAN-110-9942');
                $table->decimal('r_and_d_allocation_percent', 5, 2)->default(42.80);
                $table->decimal('sales_expansion_allocation_percent', 5, 2)->default(38.40);
                $table->decimal('capital_efficiency_score', 5, 2)->default(99.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('capital_plans');
    }
};
