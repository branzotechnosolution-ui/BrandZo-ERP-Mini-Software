<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('market_signals_v2')) {
            Schema::create('market_signals_v2', function (Blueprint $table) {
                $table->id();
                $table->string('signal_code')->default('SIG-MKT-113-9942');
                $table->integer('global_signals_processed')->default(1840000);
                $table->integer('monitored_countries')->default(184);
                $table->string('signal_intensity')->default('HIGH_GROWTH_INTENSITY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('market_signals_v2');
    }
};
