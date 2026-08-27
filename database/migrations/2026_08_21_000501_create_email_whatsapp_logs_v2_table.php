<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('email_whatsapp_logs_v2')) {
            Schema::create('email_whatsapp_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('nurture_code')->default('NUR-LOG-99420');
                $table->integer('monthly_nurture_messages_count')->default(1420000);
                $table->string('status')->default('EMAIL_WHATSAPP_NURTURE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('email_whatsapp_logs_v2');
    }
};
