<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_lead_assignment_histories_v2')) {
            Schema::create('crm_lead_assignment_histories_v2', function (Blueprint $table) {
                $table->id();
                $table->string('history_code')->default('HIS-RUT-99420');
                $table->string('lead_code')->default('LEAD-2026-9942');
                $table->string('previous_owner')->default('Unassigned System Pool');
                $table->string('new_owner')->default('Senior Sales Director');
                $table->string('assignment_reason')->default('VIP Budget Trigger (> ,000)');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_lead_assignment_histories_v2');
    }
};
