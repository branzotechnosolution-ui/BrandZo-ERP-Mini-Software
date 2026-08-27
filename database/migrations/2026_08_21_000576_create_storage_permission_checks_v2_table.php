<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('storage_permission_checks_v2')) {
            Schema::create('storage_permission_checks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('perm_code')->default('STR-PRM-2026-9942');
                $table->string('status')->default('STORAGE_AND_BOOTSTRAP_PERMISSIONS_VALIDATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('storage_permission_checks_v2');
    }
};
