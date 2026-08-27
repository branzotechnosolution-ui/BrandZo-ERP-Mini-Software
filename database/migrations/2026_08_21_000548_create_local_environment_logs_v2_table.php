<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('local_environment_logs_v2')) {
            Schema::create('local_environment_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('log_code')->default('LOC-ENV-161-9942');
                $table->string('environment')->default('LOCAL_DEVELOPMENT_ENVIRONMENT');
                $table->string('status')->default('LOCAL_ENVIRONMENT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('local_environment_logs_v2');
    }
};
