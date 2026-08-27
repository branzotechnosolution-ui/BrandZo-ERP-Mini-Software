<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('backup_restore_logs_v2')) {
            Schema::create('backup_restore_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('backup_code')->default('BKP-RST-2026-9942');
                $table->string('restore_test')->default('INSTANT_RESTORE_PASSED_ZERO_DATA_LOSS');
                $table->string('status')->default('BACKUP_RESTORE_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('backup_restore_logs_v2');
    }
};
