<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('uat_sessions_v2')) {
            Schema::create('uat_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('uat_code')->default('UAT-SES-162-9942');
                $table->string('environment')->default('USER_ACCEPTANCE_TESTING_ENVIRONMENT');
                $table->string('status')->default('UAT_ENVIRONMENT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('uat_sessions_v2');
    }
};
