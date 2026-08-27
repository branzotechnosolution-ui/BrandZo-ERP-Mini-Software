<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_evolution_clients_v2')) {
            Schema::create('crm_evolution_clients_v2', function (Blueprint $table) {
                $table->id();
                $table->string('client_code')->unique()->default('CLI-2026-9942');
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->unsignedBigInteger('deal_id')->nullable();
                $table->string('company_name')->default('Acme Global Enterprises');
                $table->string('contact_person')->default('John Doe');
                $table->string('phone')->default('+1-555-0199');
                $table->string('email')->default('john@acmeglobal.com');
                $table->decimal('total_contract_value', 12, 2)->default(50000.00);
                $table->string('subscribed_services')->default('Enterprise OS SaaS Suite');
                $table->string('subscription_status')->default('ACTIVE_ENTERPRISE');
                $table->integer('invoices_count')->default(1);
                $table->decimal('total_paid_amount', 12, 2)->default(50000.00);
                $table->integer('support_tickets_count')->default(0);
                $table->integer('active_projects_count')->default(1);
                $table->text('notes')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_evolution_clients_v2');
    }
};
