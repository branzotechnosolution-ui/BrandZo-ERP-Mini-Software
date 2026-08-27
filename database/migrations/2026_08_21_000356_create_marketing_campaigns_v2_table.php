<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketing_campaigns_v2')) {
            Schema::create('marketing_campaigns_v2', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_code')->default('CMP-MKT-129-9942');
                $table->string('campaign_name')->default('Global Enterprise Multimodal AI SDR Expansion');
                $table->decimal('budget_usd', 12, 2)->default(142000.00);
                $table->string('status')->default('CAMPAIGN_OPTIMIZED_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketing_campaigns_v2');
    }
};
