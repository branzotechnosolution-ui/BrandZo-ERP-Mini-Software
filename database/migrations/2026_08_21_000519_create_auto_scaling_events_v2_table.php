<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('auto_scaling_events_v2')) {
            Schema::create('auto_scaling_events_v2', function (Blueprint $table) {
                $table->id();
                $table->string('event_code')->default('SCALE-EVT-99420');
                $table->string('scaling_policy')->default('PREDICTIVE_AI_WORKLOAD_SCALING');
                $table->string('status')->default('AUTO_SCALING_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('auto_scaling_events_v2');
    }
};
