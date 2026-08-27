<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('resource_metrics_v2')) {
            Schema::create('resource_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('resource_code')->default('RSC-MET-2026-9942');
                $table->decimal('resource_utilization_percent', 5, 2)->default(98.40);
                $table->string('status')->default('WORKLOAD_FULLY_BALANCED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('resource_metrics_v2');
    }
};
