<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_kanban_boards_v2')) {
            Schema::create('crm_kanban_boards_v2', function (Blueprint $table) {
                $table->id();
                $table->string('kanban_code')->unique()->default('KNB-2026-9942');
                $table->string('board_type')->default('DEAL'); // LEAD, DEAL
                $table->string('entity_code')->default('DEAL-2026-9942');
                $table->string('title')->default('Acme Enterprise OS Deal');
                $table->string('company_name')->default('Acme Global Enterprises');
                $table->decimal('value', 15, 2)->default(50000.00);
                $table->integer('probability_percent')->default(85);
                $table->date('expected_close_date')->nullable();
                $table->string('assigned_salesperson')->default('Senior Sales Executive');
                $table->string('current_stage')->default('Negotiation');
                $table->string('followup_status')->default('SCHEDULED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_kanban_boards_v2');
    }
};
