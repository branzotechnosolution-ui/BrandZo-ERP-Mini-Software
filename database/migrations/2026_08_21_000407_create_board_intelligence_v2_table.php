<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('board_intelligence_v2')) {
            Schema::create('board_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('board_code')->default('BOARD-INT-99420');
                $table->string('briefing_title')->default('Q3 Board of Directors Executive Briefing');
                $table->decimal('risk_score', 5, 2)->default(0.01);
                $table->string('status')->default('BOARD_MEETING_INTELLIGENCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('board_intelligence_v2');
    }
};
