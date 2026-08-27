<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('tenant_accounts_v2')) {
            Schema::create('tenant_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_code')->default('TENANT-SAAS-99420');
                $table->integer('active_companies_count')->default(14200);
                $table->integer('active_users_count')->default(520000);
                $table->string('status')->default('TENANT_ISOLATION_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant_accounts_v2');
    }
};
