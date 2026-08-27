<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cost_optimizations_v2')) {
            Schema::create('cost_optimizations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('cost_code')->default('CST-OPT-2026-9942');
                $table->decimal('server_cost_savings_percent', 5, 2)->default(42.80);
                $table->string('status')->default('AI_COST_OPTIMIZATION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cost_optimizations_v2');
    }
};
