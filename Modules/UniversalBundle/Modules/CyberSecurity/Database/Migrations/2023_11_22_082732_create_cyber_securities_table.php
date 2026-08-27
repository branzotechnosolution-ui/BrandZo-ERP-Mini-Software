<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\CyberSecurity\Entities\CyberSecurity;

return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cyber_securities')) {
            Schema::create('cyber_securities', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('max_retries')->default(3);
                $table->string('email')->nullable();
                $table->unsignedBigInteger('lockout_time')->default(2);
                $table->unsignedBigInteger('max_lockouts')->default(3);
                $table->unsignedBigInteger('extended_lockout_time')->default(1);
                $table->unsignedBigInteger('reset_retries')->default(24);
                $table->unsignedBigInteger('alert_after_lockouts')->default(2);
                $table->unsignedBigInteger('user_timeout')->default(10);
                $table->boolean('ip_check')->default(false);
                $table->string('ip')->nullable();
                $table->boolean('unique_session')->default(false);
                $table->timestamps();
            });

            CyberSecurity::create([]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cyber_securities');
    }

};
