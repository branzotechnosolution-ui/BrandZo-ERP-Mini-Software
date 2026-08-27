<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_kanban_stage_histories_v2')) {
            Schema::create('crm_kanban_stage_histories_v2', function (Blueprint $table) {
                $table->id();
                $table->string('history_code')->default('HIS-KNB-99420');
                $table->string('entity_code')->default('DEAL-2026-9942');
                $table->string('from_stage')->default('Proposal Sent');
                $table->string('to_stage')->default('Negotiation');
                $table->string('changed_by')->default('Admin User');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_kanban_stage_histories_v2');
    }
};
