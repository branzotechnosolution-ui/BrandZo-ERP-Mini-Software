<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_mobile_events_v2')) {
            Schema::create('customer_mobile_events_v2', function (Blueprint $table) {
                $table->id();
                $table->string('event_code')->default('CUST-MOB-99420');
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_MOBILE_SUPER_APP_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_mobile_events_v2');
    }
};
