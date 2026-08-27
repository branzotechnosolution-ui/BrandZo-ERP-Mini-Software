<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('identity_logs')) {
            Schema::create('identity_logs', function (Blueprint $table) {
                $table->id();
                $table->string('user_id')->default('USER-8420');
                $table->string('auth_method')->default('Adaptive WebAuthn / FIDO2 MFA');
                $table->string('device_trust_score')->default('100 / 100 Trusted');
                $table->string('status')->default('Authenticated');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('identity_logs');
    }
};
