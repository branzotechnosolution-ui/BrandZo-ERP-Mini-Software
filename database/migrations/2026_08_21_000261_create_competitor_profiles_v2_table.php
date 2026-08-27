<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('competitor_profiles_v2')) {
            Schema::create('competitor_profiles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('competitor_name')->default('Legacy Enterprise ERP Vendor');
                $table->decimal('threat_level_score', 5, 2)->default(0.02);
                $table->decimal('dominance_index', 5, 2)->default(99.80);
                $table->string('status')->default('NEUTRALIZED_MARKET_LEADER');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('competitor_profiles_v2');
    }
};
