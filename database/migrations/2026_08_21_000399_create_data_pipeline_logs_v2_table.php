<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_pipeline_logs_v2')) {
            Schema::create('data_pipeline_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('pipeline_code')->default('PIPE-LOG-99420');
                $table->integer('active_pipelines_count')->default(384);
                $table->string('sync_latency_display')->default('1.42ms Latency');
                $table->string('status')->default('PIPELINE_STATUS_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_pipeline_logs_v2');
    }
};
