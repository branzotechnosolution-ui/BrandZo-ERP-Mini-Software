<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('runtime_log_checks_v2')) {
            Schema::create('runtime_log_checks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('log_check_code')->default('LOG-CHK-99420');
                $table->integer('runtime_errors_count')->default(0);
                $table->string('status')->default('ZERO_RUNTIME_EXCEPTIONS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('runtime_log_checks_v2');
    }
};
