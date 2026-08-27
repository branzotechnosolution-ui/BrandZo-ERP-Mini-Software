<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_kanban_metrics_v2')) {
            Schema::create('crm_kanban_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-KNB-99420');
                $table->integer('active_columns_count')->default(10);
                $table->string('status')->default('KANBAN_PIPELINE_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_kanban_metrics_v2');
    }
};
