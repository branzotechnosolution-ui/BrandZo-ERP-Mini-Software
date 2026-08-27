<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_evolution_logs')) {
            Schema::create('enterprise_evolution_logs', function (Blueprint $table) {
                $table->id();
                $table->string('phase_milestone')->default('Phase 50 Complete');
                $table->text('evolution_summary')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_evolution_logs');
    }
};
