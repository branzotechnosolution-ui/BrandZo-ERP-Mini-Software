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
        if (Schema::hasTable('employee_monthly_salaries')) {
Schema::table('employee_monthly_salaries', function (Blueprint $table) use ('employee_monthly_salaries') {
            $table->string('fixed_allowance')->after('basic_salary'); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('employee_monthly_salaries')) {
Schema::table('employee_monthly_salaries', function (Blueprint $table) use ('employee_monthly_salaries') {
            $table->dropColumn('fixed_allowance'); }
        }); }
    }
};
