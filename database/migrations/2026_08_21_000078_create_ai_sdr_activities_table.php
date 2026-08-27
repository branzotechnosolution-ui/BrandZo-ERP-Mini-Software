<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_sdr_activities')) {
            Schema::create('ai_sdr_activities', function (Blueprint $table) {
                $table->id();
                $table->string('agent_id')->default('AI-SDR-AGENT-01');
                $table->string('target_lead');
                $table->string('action_taken')->default('Automated Proposal & Demo Booking');
                $table->string('outcome')->default('Meeting Scheduled');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_sdr_activities');
    }
};
