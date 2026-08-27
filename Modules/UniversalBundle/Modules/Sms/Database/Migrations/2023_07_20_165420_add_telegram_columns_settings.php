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
            $table->string('telegram_bot_name')->nullable()->after('telegram_bot_token'); }
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
            $table->dropColumn(['telegram_bot_name']); }
        }); }

    }

};
