<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('growth_opportunities_v2')) {
            Schema::create('growth_opportunities_v2', function (Blueprint $table) {
                $table->id();
                $table->string('target_sector')->default('Healthcare & Biotech');
                $table->integer('target_companies_count')->default(420);
                $table->string('time_horizon')->default('Next 6 Months');
                $table->string('ai_insight')->default('Healthcare sectorல next 6 monthsல 420 companies target பண்ணலாம்');
                $table->decimal('potential_arr_usd', 12, 2)->default(28400000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('growth_opportunities_v2');
    }
};
