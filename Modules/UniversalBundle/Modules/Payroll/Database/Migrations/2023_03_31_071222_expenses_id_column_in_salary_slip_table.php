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
            $table->boolean('expenses_created')->default(0); }
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
            $table->dropColumn('expenses_created'); }
        }); }
    }
};
