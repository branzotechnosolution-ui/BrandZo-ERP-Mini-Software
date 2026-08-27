<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('productivity_metrics_v2')) {
            Schema::create('productivity_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('productivity_code')->default('PROD-MET-2026-9942');
                $table->decimal('productivity_score', 5, 2)->default(99.80);
                $table->string('status')->default('PEAK_PRODUCTIVITY_ACHIEVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('productivity_metrics_v2');
    }
};
