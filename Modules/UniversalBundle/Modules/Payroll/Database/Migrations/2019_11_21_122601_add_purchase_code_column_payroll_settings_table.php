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
        if (Schema::hasTable('payroll_settings')) {
Schema::table('payroll_settings', function (Blueprint $table) use ('payroll_settings') {
            $table->string('purchase_code')->nullable(); }
        }); }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('payroll_settings')) {
Schema::table('payroll_settings', function (Blueprint $table) use ('payroll_settings') {
            $table->dropColumn(['purchase_code']); }
        }); }
    }
};
