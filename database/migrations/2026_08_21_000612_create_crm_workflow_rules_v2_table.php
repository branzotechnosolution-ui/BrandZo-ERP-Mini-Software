<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_workflow_rules_v2')) {
            Schema::create('crm_workflow_rules_v2', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_code')->unique()->default('WKF-2026-9942');
                $table->string('name')->default('High Intent Hot Lead Escalation');
                $table->string('trigger_event')->default('Score Threshold Reached'); // Lead Created, Lead Updated, Lead Stage Changed, AI Score Generated, Score Threshold Reached, Follow-up Overdue, Lead Inactive
                $table->text('if_condition')->default('AI Score > 80');
                $table->text('then_action')->default('Assign Senior Sales, Create Follow-up, Send Alert'); // Send Email, Send WhatsApp, Create Follow-up, Assign Employee, Update Lead Stage, Send Notification, Webhook Trigger
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_workflow_rules_v2');
    }
};
