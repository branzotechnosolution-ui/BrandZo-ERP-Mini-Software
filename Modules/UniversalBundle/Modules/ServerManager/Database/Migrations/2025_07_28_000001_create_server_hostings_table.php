<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('server_hostings')) {
Schema::create('server_hostings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('name');
            $table->string('domain_name');
            $table->string('hosting_provider');
            $table->string('provider_url')->nullable();
            $table->string('server_type')->default('shared'); // shared, vps, dedicated
            $table->string('ip_address')->nullable();
            $table->string('server_location')->nullable();
            $table->string('disk_space')->nullable();
            $table->string('bandwidth')->nullable();
            $table->unsignedBigInteger('database_limit')->nullable();
            $table->unsignedBigInteger('email_limit')->nullable();
            $table->string('username')->nullable();
            $table->text('password')->nullable(); // encrypted
            $table->string('control_panel')->nullable(); // cpanel, plesk, etc.
            $table->string('control_panel_url')->nullable();
            $table->string('cpanel_url')->nullable();
            $table->unsignedBigInteger('project')->nullable();
            $table->unsignedBigInteger('client')->nullable();
            $table->string('ftp_host')->nullable();
            $table->string('ftp_username')->nullable();
            $table->text('ftp_password')->nullable(); // encrypted
            $table->string('database_host')->nullable();
            $table->string('database_name')->nullable();
            $table->string('database_username')->nullable();
            $table->text('database_password')->nullable(); // encrypted
            $table->date('purchase_date');
            $table->date('renewal_date');
            $table->decimal('monthly_cost', 10, 2)->default(0);
            $table->decimal('annual_cost', 10, 2)->default(0);
            $table->string('billing_cycle')->default('monthly'); // monthly, quarterly, annually
            $table->string('status')->default('active'); // active, suspended, expired, cancelled
            $table->text('notes')->nullable();
            $table->text('ssl_certificate_info')->nullable();
            $table->boolean('ssl_certificate')->default(false);
            $table->date('ssl_expiry_date')->nullable();
            $table->string('ssl_type')->nullable();
            // $table->text('backup_info')->nullable();
            // $table->string('backup_frequency')->default('daily'); // daily, weekly, monthly
            // $table->date('last_backup_date')->nullable();
            $table->boolean('expiry_notification')->default(false);
            $table->unsignedBigInteger('notification_days_before')->nullable();
            $table->enum('notification_time_unit', ['days', 'weeks', 'months'])->default('days');
            $table->timestamp('last_notification_sent')->nullable();
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('server_hostings');
    }
}

// close hasTable check