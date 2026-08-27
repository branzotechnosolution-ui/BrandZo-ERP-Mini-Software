<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('invoice_records_v2')) {
            Schema::create('invoice_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('invoice_code')->default('INV-SAAS-99420');
                $table->string('invoice_url')->default('/invoices/INV-2026-9942.pdf');
                $table->string('status')->default('INVOICE_GENERATED_AND_SIGNED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('invoice_records_v2');
    }
};
