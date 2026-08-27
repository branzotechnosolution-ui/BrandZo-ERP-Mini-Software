<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('expansion_opportunities_v2')) {
            Schema::create('expansion_opportunities_v2', function (Blueprint $table) {
                $table->id();
                $table->string('opportunity_code')->default('EXP-OPP-99420');
                $table->integer('opportunity_gaps_count')->default(138);
                $table->string('status')->default('EXPANSION_OPPORTUNITIES_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('expansion_opportunities_v2');
    }
};
