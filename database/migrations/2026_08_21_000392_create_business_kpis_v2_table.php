<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_kpis_v2')) {
            Schema::create('business_kpis_v2', function (Blueprint $table) {
                $table->id();
                $table->string('kpi_code')->default('KPI-ENT-135-9942');
                $table->string('metric_name')->default('ARR Growth YoY');
                $table->integer('total_kpis_monitored')->default(1420);
                $table->string('status')->default('ENTERPRISE_KPI_INTELLIGENCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_kpis_v2');
    }
};
