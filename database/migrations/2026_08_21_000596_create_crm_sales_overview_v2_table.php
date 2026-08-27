<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sales_overview_v2')) {
            Schema::create('crm_sales_overview_v2', function (Blueprint $table) {
                $table->id();
                $table->string('overview_code')->unique()->default('OVR-2026-9942');
                $table->integer('total_leads')->default(142);
                $table->integer('active_deals')->default(88);
                $table->integer('won_deals')->default(64);
                $table->decimal('total_revenue', 15, 2)->default(3200000.00);
                $table->decimal('conversion_rate', 5, 2)->default(61.97);
                $table->decimal('pipeline_value', 15, 2)->default(4850000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sales_overview_v2');
    }
};
