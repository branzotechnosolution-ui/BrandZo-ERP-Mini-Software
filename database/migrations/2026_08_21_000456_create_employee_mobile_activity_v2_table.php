<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('employee_mobile_activity_v2')) {
            Schema::create('employee_mobile_activity_v2', function (Blueprint $table) {
                $table->id();
                $table->string('activity_code')->default('EMP-MOB-2026-9942');
                $table->string('gps_checkin_precision')->default('99.98% GPS Checkin Precision');
                $table->string('status')->default('EMPLOYEE_MOBILE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_mobile_activity_v2');
    }
};
