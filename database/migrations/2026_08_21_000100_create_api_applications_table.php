<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_applications')) {
            Schema::create('api_applications', function (Blueprint $table) {
                $table->id();
                $table->string('app_name')->default('Enterprise CRM Sync Connector');
                $table->string('developer_id')->default('DEV-8420');
                $table->string('client_id')->default('client_brandzo_9942');
                $table->string('status')->default('Active & Approved');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_applications');
    }
};
