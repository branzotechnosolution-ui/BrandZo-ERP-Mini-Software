<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('support_channels_v2')) {
            Schema::create('support_channels_v2', function (Blueprint $table) {
                $table->id();
                $table->string('channel_code')->default('CHN-SUP-148-9942');
                $table->string('channel_name')->default('Omnichannel AI Support Hub');
                $table->string('status')->default('SUPPORT_CHANNEL_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('support_channels_v2');
    }
};
