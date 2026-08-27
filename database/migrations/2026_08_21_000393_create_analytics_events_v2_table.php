<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('analytics_events_v2')) {
            Schema::create('analytics_events_v2', function (Blueprint $table) {
                $table->id();
                $table->string('event_code')->default('EVT-ANLZ-99420');
                $table->decimal('user_growth_percent', 5, 2)->default(42.80);
                $table->string('query_latency_display')->default('1.42ms Latency');
                $table->string('status')->default('REALTIME_METRICS_LOGGED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('analytics_events_v2');
    }
};
