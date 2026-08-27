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
            $table->unsignedBigInteger('added_by')->unsigned()->nullable(); }
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade'); }

            $table->unsignedBigInteger('last_updated_by')->unsigned()->nullable(); }
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade'); }
        }); }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
