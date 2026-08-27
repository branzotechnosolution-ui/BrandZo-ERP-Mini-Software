<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('leads')) {
            Schema::table('leads', function (Blueprint $table) {
                if (!Schema::hasColumn('leads', 'lead_score')) {
                    $table->integer('lead_score')->default(50)->after('value');
                }
                if (!Schema::hasColumn('leads', 'expected_closing_date')) {
                    $table->date('expected_closing_date')->nullable()->after('next_follow_up');
                }
                if (!Schema::hasColumn('leads', 'next_action')) {
                    $table->string('next_action')->nullable()->after('expected_closing_date');
                }
                if (!Schema::hasColumn('leads', 'whatsapp_opt_in')) {
                    $table->boolean('whatsapp_opt_in')->default(1)->after('whatsapp');
                }
            });
        }

        if (!Schema::hasTable('lead_stage_histories')) {
            Schema::create('lead_stage_histories', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->unsignedBigInteger('lead_id');
                $table->unsignedBigInteger('from_status_id')->nullable();
                $table->unsignedBigInteger('to_status_id');
                $table->unsignedBigInteger('updated_by');
                $table->text('notes');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('lead_call_logs')) {
            Schema::create('lead_call_logs', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->unsignedBigInteger('lead_id');
                $table->unsignedBigInteger('user_id');
                $table->enum('call_type', ['inbound', 'outbound'])->default('outbound');
                $table->dateTime('call_date_time');
                $table->integer('duration_seconds')->default(0);
                $table->text('notes')->nullable();
                $table->string('recording_file')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('whatsapp_settings')) {
            Schema::create('whatsapp_settings', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->enum('provider', ['meta', 'aisensy', 'interakt'])->default('meta');
                $table->string('api_key')->nullable();
                $table->string('phone_number_id')->nullable();
                $table->string('business_account_id')->nullable();
                $table->string('webhook_secret')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('whatsapp_settings');
        Schema::dropIfExists('lead_call_logs');
        Schema::dropIfExists('lead_stage_histories');
    }
};
