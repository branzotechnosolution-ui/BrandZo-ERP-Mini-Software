<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('vehicle_health_metrics_v2')) {
            Schema::create('vehicle_health_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('vehicle_code')->default('VEH-HEALTH-99420');
                $table->decimal('fleet_health_score', 5, 2)->default(100.00);
                $table->decimal('fuel_efficiency_boost_percent', 5, 2)->default(38.40);
                $table->string('maintenance_status')->default('PREDICTIVE_MAINTENANCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle_health_metrics_v2');
    }
};
