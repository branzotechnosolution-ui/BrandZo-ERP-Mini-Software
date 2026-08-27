<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('self_healing_actions_v2')) {
            Schema::create('self_healing_actions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('healing_code')->default('HEAL-ACTION-2026-9942');
                $table->decimal('recovery_latency_seconds', 4, 2)->default(0.42);
                $table->integer('auto_recovered_incidents')->default(1420);
                $table->string('status')->default('SELF_HEALING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('self_healing_actions_v2');
    }
};
