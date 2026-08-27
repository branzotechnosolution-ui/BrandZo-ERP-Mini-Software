<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_productivity_metrics_v2')) {
            Schema::create('ai_productivity_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->decimal('productivity_boost_percent', 5, 2)->default(42.80);
                $table->bigInteger('hours_saved_monthly')->default(3840000);
                $table->decimal('roi_multiplier', 5, 2)->default(18.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_productivity_metrics_v2');
    }
};
