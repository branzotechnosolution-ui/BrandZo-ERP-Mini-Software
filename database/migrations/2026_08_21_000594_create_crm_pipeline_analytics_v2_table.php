<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_pipeline_analytics_v2')) {
            Schema::create('crm_pipeline_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytics_code')->default('ANL-PIP-99420');
                $table->decimal('total_pipeline_value', 15, 2)->default(4850000.00);
                $table->decimal('overall_conversion_percent', 5, 2)->default(61.97);
                $table->integer('total_leads_in_pipeline')->default(142);
                $table->integer('total_deals_in_pipeline')->default(88);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_pipeline_analytics_v2');
    }
};
