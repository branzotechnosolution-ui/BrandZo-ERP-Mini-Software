<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_client_360_metrics_v2')) {
            Schema::create('crm_client_360_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-C360-99420');
                $table->integer('active_projects_count')->default(3);
                $table->integer('support_tickets_count')->default(1);
                $table->string('status')->default('CLIENT_360_SYSTEM_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_client_360_metrics_v2');
    }
};
