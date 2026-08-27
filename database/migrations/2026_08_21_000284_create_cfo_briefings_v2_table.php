<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cfo_briefings_v2')) {
            Schema::create('cfo_briefings_v2', function (Blueprint $table) {
                $table->id();
                $table->string('briefing_code')->default('CFO-BRF-117-9942');
                $table->string('mrr_str')->default('₹1.84 Crores');
                $table->string('arr_str')->default('₹22.08 Crores');
                $table->integer('cash_runway_months')->default(48);
                $table->decimal('ebitda_margin_percent', 5, 2)->default(68.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cfo_briefings_v2');
    }
};
