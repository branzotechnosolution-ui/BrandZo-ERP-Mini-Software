<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_triggers_v2')) {
            Schema::create('workflow_triggers_v2', function (Blueprint $table) {
                $table->id();
                $table->string('trigger_type')->default('REALTIME_EVENT_HOOK');
                $table->string('event_name')->default('invoice.payment_succeeded');
                $table->string('action_dispatched')->default('Auto-Provision ERP Subscription & Notify AI SDR');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_triggers_v2');
    }
};
