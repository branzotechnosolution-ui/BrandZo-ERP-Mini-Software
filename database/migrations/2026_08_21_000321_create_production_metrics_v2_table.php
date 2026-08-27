<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('production_metrics_v2')) {
            Schema::create('production_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('PROD-MET-99420');
                $table->decimal('machine_utilization_percent', 5, 2)->default(98.40);
                $table->integer('active_bottlenecks')->default(0);
                $table->string('throughput_status')->default('PEAK_THROUGHPUT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('production_metrics_v2');
    }
};
