<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_intelligence_streams_v2')) {
            Schema::create('data_intelligence_streams_v2', function (Blueprint $table) {
                $table->id();
                $table->string('stream_name')->default('Realtime Multi-Tenant Telemetry & Financial Pipeline');
                $table->bigInteger('events_per_sec')->default(1840000);
                $table->string('anomaly_detection_status')->default('ZERO_ANOMALIES_DETECTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_intelligence_streams_v2');
    }
};
