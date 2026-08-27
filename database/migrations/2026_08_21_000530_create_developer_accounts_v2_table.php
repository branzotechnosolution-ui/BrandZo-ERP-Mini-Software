<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_accounts_v2')) {
            Schema::create('developer_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('developer_code')->default('DEV-ACC-158-9942');
                $table->integer('registered_developers_count')->default(12400);
                $table->string('status')->default('DEVELOPER_PORTAL_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_accounts_v2');
    }
};
