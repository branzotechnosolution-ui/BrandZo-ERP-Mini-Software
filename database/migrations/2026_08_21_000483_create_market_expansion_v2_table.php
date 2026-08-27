<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('market_expansion_v2')) {
            Schema::create('market_expansion_v2', function (Blueprint $table) {
                $table->id();
                $table->string('expansion_code')->default('MKT-EXP-99420');
                $table->decimal('yoy_growth_percent', 5, 2)->default(38.40);
                $table->string('status')->default('MARKET_EXPANSION_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('market_expansion_v2');
    }
};
