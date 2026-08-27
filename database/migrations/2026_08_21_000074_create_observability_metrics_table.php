<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('observability_metrics')) {
            Schema::create('observability_metrics', function (Blueprint $table) {
                $table->id();
                $table->string('metric_name')->default('http_request_duration_ms');
                $table->decimal('value', 10, 4)->default(14.20);
                $table->string('node_id')->default('k8s-pod-worker-01');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('observability_metrics');
    }
};
