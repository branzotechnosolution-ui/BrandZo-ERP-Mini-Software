<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('automated_roadmaps_v2')) {
            Schema::create('automated_roadmaps_v2', function (Blueprint $table) {
                $table->id();
                $table->string('milestone')->default('Q4 2026 Global AI Marketplace Release');
                $table->string('horizon')->default('1-Year / 3-Year / 5-Year Autonomous Roadmap');
                $table->string('completion_status')->default('ON_TRACK_100');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('automated_roadmaps_v2');
    }
};
