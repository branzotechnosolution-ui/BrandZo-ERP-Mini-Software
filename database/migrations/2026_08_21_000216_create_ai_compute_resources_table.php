<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_compute_resources')) {
            Schema::create('ai_compute_resources', function (Blueprint $table) {
                $table->id();
                $table->string('cluster_id')->default('GPU-H100-CLUSTER-01');
                $table->integer('gpu_nodes')->default(64);
                $table->decimal('gpu_utilization', 5, 2)->default(84.20);
                $table->string('status')->default('AUTOSCALED_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_compute_resources');
    }
};
