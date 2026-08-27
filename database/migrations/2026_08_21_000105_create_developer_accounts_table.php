<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_accounts')) {
            Schema::create('developer_accounts', function (Blueprint $table) {
                $table->id();
                $table->string('developer_email');
                $table->string('company_name')->default('BrandZo Partner Ecosystem Developer');
                $table->string('account_tier')->default('Enterprise Developer Tier');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_accounts');
    }
};
