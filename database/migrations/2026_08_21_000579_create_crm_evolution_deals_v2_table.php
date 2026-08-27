<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_evolution_deals_v2')) {
            Schema::create('crm_evolution_deals_v2', function (Blueprint $table) {
                $table->id();
                $table->string('deal_code')->unique()->default('DEAL-2026-9942');
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->string('deal_name')->default('Acme Enterprise OS Deal');
                $table->string('company_name')->default('Acme Global Enterprises');
                $table->string('contact_person')->default('John Doe');
                $table->string('phone')->default('+1-555-0199');
                $table->string('email')->default('john@acmeglobal.com');
                $table->decimal('deal_value', 12, 2)->default(50000.00);
                $table->string('product_service')->default('Enterprise OS SaaS');
                $table->string('sales_person')->default('Senior Sales Executive');
                $table->integer('probability_percent')->default(85);
                $table->date('expected_closing_date')->nullable();
                $table->text('requirement_details')->nullable();
                $table->text('notes')->nullable();
                $table->string('stage')->default('New Deal'); // New Deal -> Proposal Sent -> Negotiation -> Won -> Convert To Client
                $table->boolean('converted_to_client')->default(false);
                $table->unsignedBigInteger('client_id')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_evolution_deals_v2');
    }
};
