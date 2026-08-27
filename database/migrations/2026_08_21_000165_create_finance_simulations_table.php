<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('finance_simulations')) {
            Schema::create('finance_simulations', function (Blueprint $table) {
                $table->id();
                $table->string('scenario_title')->default('Cost Optimization & APAC Capital Allocation');
                $table->decimal('projected_mrr_boost', 5, 2)->default(38.40);
                $table->decimal('confidence_score', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('finance_simulations');
    }
};
