<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Adds the fields requested for the "Add Employee" form:
     * - state / district      : cascading India state/district selection (also used for other countries as free text)
     * - experience_years      : total years of experience for the employee
     * - annual_ctc            : yearly CTC used for the offer letter take-home calculation
     */
    public function up()
    {
        Schema::table('employee_details', function (Blueprint $table) {
            if (!Schema::hasColumn('employee_details', 'state')) {
                $table->string('state', 100)->nullable()->after('address');
            }

            if (!Schema::hasColumn('employee_details', 'district')) {
                $table->string('district', 100)->nullable()->after('state');
            }

            if (!Schema::hasColumn('employee_details', 'experience_years')) {
                $table->decimal('experience_years', 4, 1)->nullable()->after('employment_type');
            }

            if (!Schema::hasColumn('employee_details', 'annual_ctc')) {
                $table->decimal('annual_ctc', 15, 2)->nullable()->after('hourly_rate');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('employee_details', function (Blueprint $table) {
            $columns = ['state', 'district', 'experience_years', 'annual_ctc'];

            foreach ($columns as $column) {
                if (Schema::hasColumn('employee_details', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
