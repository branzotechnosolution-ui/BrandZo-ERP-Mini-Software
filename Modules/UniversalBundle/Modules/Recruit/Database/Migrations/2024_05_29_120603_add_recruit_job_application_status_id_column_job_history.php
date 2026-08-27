<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('recruit_job_histories')) {
Schema::table('recruit_job_histories', function (Blueprint $table) use ('recruit_job_histories') {
            $table->unsignedBigInteger('recruit_job_application_status_id')->unsigned()->nullable(); }
            $table->foreign('recruit_job_application_status_id')->references('id')->on('recruit_application_status')
                ->onUpdate('cascade')->onDelete('cascade'); }
        }); }
    }

    public function down(): void
    {
        if (Schema::hasTable('recruit_job_histories')) {
Schema::table('recruit_job_histories', function (Blueprint $table) use ('recruit_job_histories') {
            $table->dropForeign(['recruit_job_application_status_id']); }
            $table->dropColumn(['recruit_job_application_status_id']); }
        }); }
    }

};
