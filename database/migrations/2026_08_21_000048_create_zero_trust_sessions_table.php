<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('zero_trust_sessions')) {
            Schema::create('zero_trust_sessions', function (Blueprint $table) {
                $table->id();
                $table->string('user_identity');
                $table->string('auth_method')->default('SAML / OAuth2 / MFA');
                $table->string('security_score')->default('Zero Trust Validated');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('zero_trust_sessions');
    }
};
