<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('mobile_devices_v2')) {
            Schema::create('mobile_devices_v2', function (Blueprint $table) {
                $table->id();
                $table->string('device_code')->default('DEV-MOB-145-9942');
                $table->integer('registered_devices_count')->default(520000);
                $table->string('platform')->default('iOS_Android_Multimodal');
                $table->string('status')->default('MOBILE_DEVICE_REGISTERED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_devices_v2');
    }
};
