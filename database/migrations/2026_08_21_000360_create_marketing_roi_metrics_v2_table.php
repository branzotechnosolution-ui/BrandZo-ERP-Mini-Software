<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketing_roi_metrics_v2')) {
            Schema::create('marketing_roi_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('roi_code')->default('ROI-MET-2026-9942');
                $table->decimal('marketing_roi_multiplier', 5, 2)->default(18.40);
                $table->string('status')->default('PEAK_MARKETING_ROI');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketing_roi_metrics_v2');
    }
};
