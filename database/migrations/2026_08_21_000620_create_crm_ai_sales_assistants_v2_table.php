<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_ai_sales_assistants_v2')) {
            Schema::create('crm_ai_sales_assistants_v2', function (Blueprint $table) {
                $table->id();
                $table->string('assistant_code')->unique()->default('AST-2026-9942');
                $table->string('lead_code')->default('LEAD-2026-9942');
                $table->text('lead_summary')->default('Enterprise client evaluating BrandZo AI ERP OS for 500+ users.');
                $table->text('company_analysis')->default('Fintech / Enterprise SaaS leader expanding in North America.');
                $table->text('next_best_action')->default('Schedule executive demo with Head of Architecture.');
                $table->text('meeting_prep_notes')->default('Key focus: SLA guarantees, custom API integrations, ISO 27001 compliance.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_ai_sales_assistants_v2');
    }
};
