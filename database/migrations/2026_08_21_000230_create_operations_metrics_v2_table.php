<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('operations_metrics_v2')) {
            Schema::create('operations_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->decimal('coo_health_score', 5, 2)->default(99.80);
                $table->integer('monitored_processes')->default(14200);
                $table->integer('active_bottlenecks')->default(0);
                $table->decimal('sla_compliance_percent', 5, 2)->default(99.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('operations_metrics_v2');
    }
};
