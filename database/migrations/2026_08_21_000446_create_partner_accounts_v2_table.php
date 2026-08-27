<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_accounts_v2')) {
            Schema::create('partner_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('partner_code')->default('PTR-GLOB-144-9942');
                $table->string('partner_name')->default('Global Enterprise Reseller Network');
                $table->string('tier')->default('TIER_1_CERTIFIED_GLOBAL_RESELLER');
                $table->string('status')->default('PARTNER_ACCOUNT_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_accounts_v2');
    }
};
