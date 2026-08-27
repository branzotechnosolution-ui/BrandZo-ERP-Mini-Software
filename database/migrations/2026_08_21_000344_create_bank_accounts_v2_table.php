<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('bank_accounts_v2')) {
            Schema::create('bank_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('bank_code')->default('BANK-CORP-127-9942');
                $table->string('bank_name')->default('Global Enterprise Reserve Bank');
                $table->decimal('balance_usd', 12, 2)->default(48400000.00);
                $table->string('status')->default('DIRECT_SYNC_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('bank_accounts_v2');
    }
};
