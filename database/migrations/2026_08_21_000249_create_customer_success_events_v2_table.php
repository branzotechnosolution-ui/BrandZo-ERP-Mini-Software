<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_success_events_v2')) {
            Schema::create('customer_success_events_v2', function (Blueprint $table) {
                $table->id();
                $table->string('event_type')->default('HEALTH_SIGNAL_ANALYZED');
                $table->integer('signals_processed')->default(10420);
                $table->decimal('nrr_boost_percent', 5, 2)->default(138.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_success_events_v2');
    }
};
