<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_followup_reminders_v2')) {
            Schema::create('crm_followup_reminders_v2', function (Blueprint $table) {
                $table->id();
                $table->string('reminder_code')->default('RMD-FLW-99420');
                $table->unsignedBigInteger('followup_id')->nullable();
                $table->string('channel')->default('System Notification & Email');
                $table->dateTime('reminder_time')->nullable();
                $table->string('status')->default('SCHEDULED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_followup_reminders_v2');
    }
};
