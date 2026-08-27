<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_evolution_leads_v2')) {
            Schema::create('crm_evolution_leads_v2', function (Blueprint $table) {
                $table->id();
                $table->string('lead_code')->unique()->default('LEAD-2026-9942');
                $table->string('company_name')->default('Acme Global Enterprises');
                $table->string('contact_person')->default('John Doe');
                $table->string('phone')->default('+1-555-0199');
                $table->string('whatsapp')->default('+1-555-0199');
                $table->string('email')->default('john@acmeglobal.com');
                $table->string('website')->default('https://acmeglobal.com');
                $table->string('industry')->default('Information Technology');
                $table->string('location')->default('New York, USA');
                $table->text('address')->nullable();
                $table->string('lead_source')->default('AI Lead Engine');
                $table->text('requirement_details')->nullable();
                $table->string('interested_service')->default('Enterprise OS SaaS');
                $table->decimal('budget', 12, 2)->default(50000.00);
                $table->string('assigned_employee')->default('Senior Sales Executive');
                $table->date('followup_date')->nullable();
                $table->text('notes')->nullable();
                $table->string('stage')->default('New Lead'); // New Lead -> Contacted -> Follow Up -> Qualified -> Convert To Deal
                $table->boolean('converted_to_deal')->default(false);
                $table->unsignedBigInteger('deal_id')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_evolution_leads_v2');
    }
};
