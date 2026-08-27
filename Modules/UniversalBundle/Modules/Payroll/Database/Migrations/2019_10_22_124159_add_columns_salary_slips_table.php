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
        if (!Schema::hasTable('salary_payment_methods')) {
Schema::create('salary_payment_methods', function (Blueprint $table) {
            $table->bigIncrements('id'); }
            $table->string('payment_method'); }
            $table->boolean('default'); }
            $table->timestamps(); }
        }); }

        if (Schema::hasTable('salary_slips')) {
Schema::table('salary_slips', function (Blueprint $table) use ('salary_slips') {
            $table->text('salary_json')->nullable(); }
            $table->text('extra_json')->nullable(); }
            $table->string('expense_claims')->default('0'); }
            $table->unsignedBigInteger('pay_days'); }

            $table->unsignedBigInteger('salary_payment_method_id')->nullable(); }
            $table->foreign('salary_payment_method_id')->references('id')->on('salary_payment_methods')->onDelete('SET NULL'); }
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
            $table->dropColumn(['salary_json']); }
            $table->dropColumn(['extra_json']); }
            $table->dropColumn(['expense_claims']); }
            $table->dropColumn(['pay_days']); }

            $table->dropForeign(['salary_payment_method_id']); }
            $table->dropColumn(['salary_payment_method_id']); }
        }); }
}

        Schema::dropIfExists('salary_payment_methods'); }
    }
};

// close hasTable check