<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('supply_chain_metrics_v2')) {
            Schema::create('supply_chain_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('SCM-MET-99420');
                $table->decimal('efficiency_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_SUPPLY_CHAIN_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('supply_chain_metrics_v2');
    }
};
