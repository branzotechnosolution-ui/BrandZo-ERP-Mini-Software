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
        if (Schema::hasTable('salary_slips')) {
Schema::table('salary_slips', function (Blueprint $table) use ('salary_slips') {
            $table->double('gross_salary', 16, 2); }
            $table->double('total_deductions', 16, 2); }
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
            $table->dropColumn(['gross_salary']); }
            $table->dropColumn(['total_deductions']); }
        }); }
    }
};
