<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('fleet_profiles_v2')) {
            Schema::create('fleet_profiles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('fleet_code')->default('FLEET-AI-124-9942');
                $table->integer('active_vehicles')->default(3840);
                $table->decimal('driver_performance_score', 5, 2)->default(99.80);
                $table->string('status')->default('FLEET_ACTIVE_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('fleet_profiles_v2');
    }
};
