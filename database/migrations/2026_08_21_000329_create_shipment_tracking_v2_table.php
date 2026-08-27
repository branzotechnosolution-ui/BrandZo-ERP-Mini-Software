<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('shipment_tracking_v2')) {
            Schema::create('shipment_tracking_v2', function (Blueprint $table) {
                $table->id();
                $table->string('shipment_code')->default('SHP-TRACK-99420');
                $table->integer('active_shipments')->default(18400);
                $table->decimal('customer_csat_score', 5, 2)->default(99.60);
                $table->string('tracking_status')->default('REALTIME_SATELLITE_TRACKED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('shipment_tracking_v2');
    }
};
