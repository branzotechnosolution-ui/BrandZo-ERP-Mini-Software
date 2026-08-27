<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('campaign_roi_metrics_v2')) {
            Schema::create('campaign_roi_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('roi_code')->default('ROI-MTR-99420');
                $table->decimal('campaign_roi_multiplier', 5, 2)->default(4.82);
                $table->decimal('projected_arr_usd', 12, 2)->default(184200000.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_MARKETING_AUTOMATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('campaign_roi_metrics_v2');
    }
};
