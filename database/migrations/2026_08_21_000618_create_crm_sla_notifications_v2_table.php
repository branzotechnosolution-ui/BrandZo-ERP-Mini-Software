<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sla_notifications_v2')) {
            Schema::create('crm_sla_notifications_v2', function (Blueprint $table) {
                $table->id();
                $table->string('notification_code')->default('NTF-SLA-99420');
                $table->string('channel')->default('Email & WhatsApp');
                $table->integer('sent_count')->default(184);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sla_notifications_v2');
    }
};
