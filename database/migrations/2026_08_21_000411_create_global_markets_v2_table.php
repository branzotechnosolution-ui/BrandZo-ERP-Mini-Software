<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_markets_v2')) {
            Schema::create('global_markets_v2', function (Blueprint $table) {
                $table->id();
                $table->string('country_code')->default('IND-US-UK-APAC-99420');
                $table->integer('sovereign_countries_count')->default(195);
                $table->integer('high_potential_nations')->default(138);
                $table->string('status')->default('GLOBAL_MARKETS_TRACKED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_markets_v2');
    }
};
