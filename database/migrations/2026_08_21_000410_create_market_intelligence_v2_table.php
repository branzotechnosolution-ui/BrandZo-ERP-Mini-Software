<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('market_intelligence_v2')) {
            Schema::create('market_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('market_record_code')->default('MKT-INT-138-9942');
                $table->decimal('global_market_score', 5, 2)->default(99.80);
                $table->string('status')->default('GLOBAL_MARKET_BRAIN_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('market_intelligence_v2');
    }
};
