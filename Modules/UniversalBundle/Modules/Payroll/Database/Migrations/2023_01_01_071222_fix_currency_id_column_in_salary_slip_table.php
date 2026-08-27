<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('salary_slips')) {
Schema::table('salary_slips', function (Blueprint $table) use ('salary_slips') {
            $table->dropForeign(['currency_id']); }
            $table->foreign('currency_id')->references('id')->on('currencies')->onUpdate('cascade')->onDelete('cascade'); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('salary_slips')) {
Schema::table('salary_slips', function (Blueprint $table) use ('salary_slips') {
            $table->dropForeign('salary_slips_currency_id_foreign'); }
            $table->dropColumn('currency_id'); }
        }); }
    }
};
