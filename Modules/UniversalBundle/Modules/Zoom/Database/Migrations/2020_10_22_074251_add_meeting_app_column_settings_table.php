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
        if (Schema::hasTable('zoom_setting')) {
Schema::table('zoom_setting', function (Blueprint $table) use ('zoom_setting') {
            $table->string('meeting_app')->default('in_app'); }
        }); }

        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->string('password')->nullable(); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('zoom_setting')) {
Schema::table('zoom_setting', function (Blueprint $table) use ('zoom_setting') {
            $table->dropColumn(['meeting_app']); }
        }); }

        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->dropColumn(['password']); }
        }); }
    }
};
