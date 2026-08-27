<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sales_dashboard_metrics_v2')) {
            Schema::create('crm_sales_dashboard_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-SLS-99420');
                $table->decimal('forecasted_revenue', 15, 2)->default(4122500.00);
                $table->string('status')->default('EXECUTIVE_SALES_DASHBOARD_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sales_dashboard_metrics_v2');
    }
};
