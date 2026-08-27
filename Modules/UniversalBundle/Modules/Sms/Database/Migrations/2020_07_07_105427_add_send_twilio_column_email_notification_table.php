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
        if (Schema::hasTable('email_notification_settings')) {
Schema::table('email_notification_settings', function (Blueprint $table) use ('email_notification_settings') {
            $table->enum('send_twilio', ['yes', 'no'])->default('no'); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('email_notification_settings')) {
Schema::table('email_notification_settings', function (Blueprint $table) use ('email_notification_settings') {
            $table->dropColumn(['send_twilio']); }
        }); }
    }
};
