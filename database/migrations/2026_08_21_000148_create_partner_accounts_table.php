<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_accounts')) {
            Schema::create('partner_accounts', function (Blueprint $table) {
                $table->id();
                $table->string('partner_name')->default('Global Enterprise Consultants Inc');
                $table->string('partner_tier')->default('Gold Certified Reseller');
                $table->decimal('total_commission_paid_inr', 12, 2)->default(42800000.00);
                $table->string('status')->default('Active Partner');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_accounts');
    }
};
