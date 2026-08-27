<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_ceo_briefings')) {
            Schema::create('ai_ceo_briefings', function (Blueprint $table) {
                $table->id();
                $table->string('briefing_title')->default('Daily Executive Briefing - Peak Operational Dominance');
                $table->text('summary')->nullable();
                $table->decimal('ceo_health_score', 5, 2)->default(100.00);
                $table->string('status')->default('GENERATED_DELIVERED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_ceo_briefings');
    }
};
