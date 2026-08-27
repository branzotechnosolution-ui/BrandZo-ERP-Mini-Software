<?php

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
        if (!Schema::hasTable('recruit_job_offer_letter')) {
            Schema::create('recruit_job_offer_letter', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->integer('job_app_id')->unsigned()->nullable()->default(null);
                $table->foreign('job_app_id')->references('id')->on('recruit_job_applications')->onUpdate('cascade')->onDelete('cascade');

                $table->unsignedBigInteger('job_id')->nullable()->default(null);
                $table->foreign('job_id')->references('id')->on('recruit_jobs')->onUpdate('cascade')->onDelete('cascade');

                $table->unsignedBigInteger('employee_id')->nullable()->default(null);

                $table->date('job_expire');
                $table->date('expected_joining_date');
                $table->double('comp_amount');
                $table->double('annual_ctc')->nullable();
                $table->string('status');
                $table->enum('pay_according', ['hour', 'day', 'week', 'month', 'year']);
                $table->string('sign_require')->nullable();
                $table->string('sign_image')->nullable();
                $table->string('decline_reason')->nullable();
                $table->string('hash')->nullable();
                $table->string('ip_address')->nullable();
                $table->timestamp('offer_accept_at')->nullable();
                $table->text('description')->nullable();

                $table->unsignedBigInteger('added_by')->nullable();
                $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

                $table->unsignedBigInteger('last_updated_by')->nullable();
                $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

                $table->timestamps();
            });
        } else {
            if (!Schema::hasColumn('recruit_job_offer_letter', 'annual_ctc')) {
                Schema::table('recruit_job_offer_letter', function (Blueprint $table) {
                    $table->double('annual_ctc')->nullable()->after('comp_amount');
                });
            }
        }

        if (!Schema::hasTable('recruit_job_offer_files')) {
            Schema::create('recruit_job_offer_files', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('job_offer_id')->nullable();
                $table->foreign('job_offer_id')->references('id')->on('recruit_job_offer_letter')->onDelete('cascade')->onUpdate('cascade');
                $table->string('filename');
                $table->text('description')->nullable();
                $table->string('google_url')->nullable();
                $table->string('hashname')->nullable();
                $table->string('size')->nullable();
                $table->unsignedBigInteger('added_by')->nullable();
                $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
                $table->unsignedBigInteger('last_updated_by')->nullable();
                $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('offer_letter_histories')) {
            Schema::create('offer_letter_histories', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('job_offer_id')->nullable();
                $table->foreign('job_offer_id')->references('id')->on('recruit_job_offer_letter')->onDelete('cascade')->onUpdate('cascade');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
                $table->unsignedBigInteger('file_id')->nullable();
                $table->foreign('file_id')->references('id')->on('recruit_job_offer_files')->onDelete('cascade')->onUpdate('cascade');
                $table->text('details');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('recruit_job_offer_letter', 'annual_ctc')) {
            Schema::table('recruit_job_offer_letter', function (Blueprint $table) {
                $table->dropColumn('annual_ctc');
            });
        }
    }

};



