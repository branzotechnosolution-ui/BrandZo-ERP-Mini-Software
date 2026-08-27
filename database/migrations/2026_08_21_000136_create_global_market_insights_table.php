<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_market_insights')) {
            Schema::create('global_market_insights', function (Blueprint $table) {
                $table->id();
                $table->string('trend_summary')->default('38.4% Demand Surge in Autonomous AI SDRs');
                $table->string('market_gap')->default('Cross-Border Compliance Automation');
                $table->decimal('growth_confidence', 5, 2)->default(99.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_market_insights');
    }
};
