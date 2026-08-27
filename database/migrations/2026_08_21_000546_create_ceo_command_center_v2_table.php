<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ceo_command_center_v2')) {
            Schema::create('ceo_command_center_v2', function (Blueprint $table) {
                $table->id();
                $table->string('ceo_code')->default('CEO-CMD-2026-9942');
                $table->string('health_score')->default('100% EXCELLENT PRODUCTION');
                $table->string('status')->default('CEO_COMMAND_CENTER_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ceo_command_center_v2');
    }
};
