<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('signature_image')->nullable()->after('logo');
        });

        // Set a default office address for any company that does not have one yet.
        // This does NOT overwrite an address that has already been configured.
        DB::table('companies')
            ->where(function ($query) {
                $query->whereNull('address')->orWhere('address', '');
            })
            ->update([
                'address' => "IYAPPARAJA M S\nCoimbatore, Tamil Nadu, India",
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('signature_image');
        });
    }

};
