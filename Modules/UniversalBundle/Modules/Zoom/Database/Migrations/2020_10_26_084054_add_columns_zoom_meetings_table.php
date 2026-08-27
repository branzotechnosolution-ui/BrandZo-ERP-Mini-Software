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
        if (Schema::hasTable('zoom_meetings')) {
Schema::table('zoom_meetings', function (Blueprint $table) use ('zoom_meetings') {
            $table->unsignedBigInteger('source_meeting_id')->nullable(); }
            $table->foreign('source_meeting_id')->references('id')->on('zoom_meetings')->onDelete('cascade')->onUpdate('cascade'); }
            $table->unsignedBigInteger('occurrence_id')->nullable(); }
            $table->unsignedBigInteger('occurrence_order')->nullable(); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('zoom_meetings')) {
Schema::table('zoom_meetings', function (Blueprint $table) use ('zoom_meetings') {
            $table->dropForeign(['source_meeting_id']); }
            $table->dropColumn(['source_meeting_id', 'occurrence_id', 'occurrence_order']); }
        }); }
    }
};
