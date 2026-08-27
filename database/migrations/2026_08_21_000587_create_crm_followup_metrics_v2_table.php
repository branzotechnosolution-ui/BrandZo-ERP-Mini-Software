<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_followup_metrics_v2')) {
            Schema::create('crm_followup_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-FLW-99420');
                $table->integer('pending_count')->default(24);
                $table->integer('completed_count')->default(118);
                $table->integer('overdue_count')->default(2);
                $table->string('status')->default('FOLLOWUP_SYSTEM_HEALTH_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_followup_metrics_v2');
    }
};
