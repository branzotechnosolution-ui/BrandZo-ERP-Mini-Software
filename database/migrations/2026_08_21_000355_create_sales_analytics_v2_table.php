<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_analytics_v2')) {
            Schema::create('sales_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytic_code')->default('SLS-MET-99420');
                $table->decimal('sales_team_performance_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_ENTERPRISE_CRM_REVENUE_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_analytics_v2');
    }
};
