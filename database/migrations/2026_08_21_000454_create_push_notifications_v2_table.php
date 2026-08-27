<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('push_notifications_v2')) {
            Schema::create('push_notifications_v2', function (Blueprint $table) {
                $table->id();
                $table->string('notification_code')->default('PUSH-NOTIF-99420');
                $table->integer('daily_push_notifications')->default(18400000);
                $table->decimal('delivery_rate_percent', 5, 2)->default(99.98);
                $table->string('status')->default('PUSH_NOTIFICATION_ENGINE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('push_notifications_v2');
    }
};
