<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_apps_v2')) {
            Schema::create('developer_apps_v2', function (Blueprint $table) {
                $table->id();
                $table->string('app_code')->default('DEV-APP-2026-9942');
                $table->integer('registered_apps_count')->default(14200);
                $table->string('status')->default('DEVELOPER_MARKETPLACE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_apps_v2');
    }
};
