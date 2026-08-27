<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('machine_health_records_v2')) {
            Schema::create('machine_health_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('machine_code')->default('MACH-HEALTH-2026-9942');
                $table->decimal('equipment_health_score', 5, 2)->default(100.00);
                $table->integer('unplanned_downtime_seconds')->default(0);
                $table->string('maintenance_status')->default('PREDICTIVE_MAINTENANCE_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('machine_health_records_v2');
    }
};
