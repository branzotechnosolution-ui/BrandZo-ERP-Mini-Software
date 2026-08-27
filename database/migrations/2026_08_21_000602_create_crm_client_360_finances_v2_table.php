<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_client_360_finances_v2')) {
            Schema::create('crm_client_360_finances_v2', function (Blueprint $table) {
                $table->id();
                $table->string('finance_code')->default('FIN-360-99420');
                $table->string('client_code')->default('CLI-2026-9942');
                $table->decimal('total_revenue_generated', 15, 2)->default(50000.00);
                $table->decimal('total_paid', 15, 2)->default(40000.00);
                $table->decimal('outstanding_amount', 15, 2)->default(10000.00);
                $table->integer('invoices_count')->default(4);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_client_360_finances_v2');
    }
};
