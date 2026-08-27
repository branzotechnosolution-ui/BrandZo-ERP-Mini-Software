<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_automations')) {
            Schema::create('workflow_automations', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_name')->default('Project Delay Auto-Mitigation Workflow');
                $table->string('trigger_event')->default('Task overdue > 24 hours');
                $table->string('action_type')->default('Reassign Task to Available AI Employee');
                $table->string('approval_status')->default('Human Verified');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_automations');
    }
};
