<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_employees_v6')) {
            Schema::create('ai_employees_v6', function (Blueprint $table) {
                $table->id();
                $table->string('name')->default('AI Lead Sales Strategist');
                $table->string('department')->default('Global Growth & Sales');
                $table->string('role')->default('Senior SDR & Deal Specialist');
                $table->string('governance_level')->default('Autonomous (Tier-1 Access)');
                $table->string('status')->default('Active & Operational');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_employees_v6');
    }
};
