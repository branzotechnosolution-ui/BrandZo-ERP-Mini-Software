<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('expansion_opportunities_v3')) {
            Schema::create('expansion_opportunities_v3', function (Blueprint $table) {
                $table->id();
                $table->string('expansion_code')->default('EXP-OPP-2026-9942');
                $table->decimal('identified_expansion_arr_usd', 12, 2)->default(42800000.00);
                $table->string('status')->default('EXPANSION_REVENUE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('expansion_opportunities_v3');
    }
};
