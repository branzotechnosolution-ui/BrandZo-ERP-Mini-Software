<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_accounts')) {
            Schema::create('enterprise_accounts', function (Blueprint $table) {
                $table->id();
                $table->string('account_name')->default('Apollo Healthcare Enterprise Tier');
                $table->string('industry')->default('Global Healthcare & Life Sciences');
                $table->decimal('arr_usd', 12, 2)->default(480000.00);
                $table->decimal('health_score', 5, 2)->default(99.60);
                $table->string('account_status')->default('ACTIVE_ENTERPRISE_UNLIMITED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_accounts');
    }
};
