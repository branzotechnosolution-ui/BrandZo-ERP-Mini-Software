<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('security_audit_events')) {
            Schema::create('security_audit_events', function (Blueprint $table) {
                $table->id();
                $table->string('event_type')->default('MFA_AUTH_SUCCESS');
                $table->string('user_identity');
                $table->string('ip_address')->default('127.0.0.1');
                $table->string('severity')->default('INFO');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('security_audit_events');
    }
};
