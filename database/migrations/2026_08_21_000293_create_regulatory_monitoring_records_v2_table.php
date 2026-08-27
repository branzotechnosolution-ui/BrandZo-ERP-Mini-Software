<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('regulatory_monitoring_records_v2')) {
            Schema::create('regulatory_monitoring_records_v2', function (Blueprint $table) {
                $table->id();
                $table->integer('monitored_countries')->default(184);
                $table->string('patching_status')->default('REALTIME_REGULATORY_PATCHING_ACTIVE');
                $table->integer('legal_updates_24h')->default(384);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('regulatory_monitoring_records_v2');
    }
};
