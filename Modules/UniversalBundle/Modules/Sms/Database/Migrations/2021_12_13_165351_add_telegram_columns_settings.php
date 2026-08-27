<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('sms_settings')) {
Schema::table('sms_settings', function (Blueprint $table) use ('sms_settings') {
            $table->boolean('telegram_status')->default(0); }
            $table->string('telegram_bot_token')->nullable(); }
        }); }

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('telegram_user_id')->nullable(); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('sms_settings')) {
Schema::table('sms_settings', function (Blueprint $table) use ('sms_settings') {
            $table->dropColumn(['telegram_status']); }
            $table->dropColumn(['telegram_bot_token']); }
        }); }

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['telegram_user_id']); }
        }); }
    }
};
