<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_deals_v2')) {
            Schema::create('partner_deals_v2', function (Blueprint $table) {
                $table->id();
                $table->string('deal_code')->default('DEAL-PTR-112-9942');
                $table->string('partner_name')->default('APAC Channel Partner');
                $table->decimal('deal_value_usd', 12, 2)->default(480000.00);
                $table->string('status')->default('REGISTERED_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_deals_v2');
    }
};
