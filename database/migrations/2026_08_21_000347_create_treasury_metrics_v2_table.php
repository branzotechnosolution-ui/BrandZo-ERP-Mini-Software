<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('treasury_metrics_v2')) {
            Schema::create('treasury_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('treasury_code')->default('TRS-MET-99420');
                $table->decimal('working_capital_score', 5, 2)->default(99.60);
                $table->decimal('cash_position_usd', 12, 2)->default(48400000.00);
                $table->string('status')->default('TREASURY_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('treasury_metrics_v2');
    }
};
