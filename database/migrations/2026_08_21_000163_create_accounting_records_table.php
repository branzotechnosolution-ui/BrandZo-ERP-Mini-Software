<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('accounting_records')) {
            Schema::create('accounting_records', function (Blueprint $table) {
                $table->id();
                $table->string('entry_type')->default('AUTOMATED_GST_RECONCILIATION');
                $table->decimal('amount_inr', 12, 2)->default(1840000.00);
                $table->string('currency')->default('INR');
                $table->string('tax_status')->default('100% Tax Compliant');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('accounting_records');
    }
};
