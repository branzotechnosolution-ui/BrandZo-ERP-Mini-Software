<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_advanced_followups_v2')) {
            Schema::create('crm_advanced_followups_v2', function (Blueprint $table) {
                $table->id();
                $table->string('followup_code')->unique()->default('FLW-2026-9942');
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->unsignedBigInteger('deal_id')->nullable();
                $table->unsignedBigInteger('client_id')->nullable();
                $table->string('title')->default('Initial Enterprise Discovery Call');
                $table->string('followup_type')->default('Call'); // Call, Meeting, WhatsApp, Email
                $table->dateTime('scheduled_datetime')->nullable();
                $table->string('assigned_employee')->default('Senior Sales Executive');
                $table->string('status')->default('Pending'); // Pending, In Progress, Completed, Overdue
                $table->text('notes')->nullable();
                $table->integer('reminder_lead_minutes')->default(15);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_advanced_followups_v2');
    }
};
