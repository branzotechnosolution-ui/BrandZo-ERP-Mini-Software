<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_lead_source_analytics_v2')) {
            Schema::create('crm_lead_source_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('source_code')->default('SRC-2026-9942');
                $table->string('source_name')->default('Website'); // Website, Referral, Social Media, Advertisement, Manual Entry
                $table->integer('lead_count')->default(54);
                $table->decimal('revenue_share', 15, 2)->default(1250000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_lead_source_analytics_v2');
    }
};
