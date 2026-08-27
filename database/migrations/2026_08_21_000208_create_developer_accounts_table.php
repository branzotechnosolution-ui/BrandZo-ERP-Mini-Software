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
                $table->string('developer_name')->default('Global Enterprise AI Labs');
                $table->string('email')->default('devs@ailabs.io');
                $table->string('tier')->default('CERTIFIED_DEVELOPER_PARTNER');
                $table->decimal('total_revenue_usd', 12, 2)->default(284000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_accounts_v2');
    }
};
