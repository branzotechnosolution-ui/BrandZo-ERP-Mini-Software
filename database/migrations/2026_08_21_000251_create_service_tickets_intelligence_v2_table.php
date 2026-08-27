<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('service_tickets_intelligence_v2')) {
            Schema::create('service_tickets_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('ticket_subject')->default('API Rate Limit Adjustment Request');
                $table->decimal('automation_rate_percent', 5, 2)->default(80.00);
                $table->decimal('sla_compliance_percent', 5, 2)->default(99.60);
                $table->string('priority')->default('AUTO_ESCALATED_P1_RESOLVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('service_tickets_intelligence_v2');
    }
};
