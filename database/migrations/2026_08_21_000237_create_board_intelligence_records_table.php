<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('board_intelligence_records')) {
            Schema::create('board_intelligence_records', function (Blueprint $table) {
                $table->id();
                $table->decimal('valuation_usd', 15, 2)->default(284000000.00);
                $table->decimal('arr_crores', 10, 2)->default(22.08);
                $table->decimal('funding_readiness_score', 5, 2)->default(100.00);
                $table->string('series_b_status')->default('SERIES_B_100_PERCENT_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('board_intelligence_records');
    }
};
