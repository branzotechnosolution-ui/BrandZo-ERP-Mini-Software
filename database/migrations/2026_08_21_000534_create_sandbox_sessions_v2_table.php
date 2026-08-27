<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sandbox_sessions_v2')) {
            Schema::create('sandbox_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('sandbox_code')->default('SND-SES-2026-9942');
                $table->string('environment')->default('ISOLATED_MOCK_SANDBOX');
                $table->string('status')->default('SANDBOX_TESTING_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sandbox_sessions_v2');
    }
};
