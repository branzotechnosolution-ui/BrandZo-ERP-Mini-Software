<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('project_intelligence_logs')) {
            Schema::create('project_intelligence_logs', function (Blueprint $table) {
                $table->id();
                $table->string('project_name')->default('BrandZo ERP Phase 98 Collaboration Launch');
                $table->decimal('completion_rate', 5, 2)->default(100.00);
                $table->string('risk_status')->default('ZERO_PROJECT_RISK');
                $table->decimal('workload_balance_score', 5, 2)->default(99.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('project_intelligence_logs');
    }
};
