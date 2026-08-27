<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('deployment_metrics_v2')) {
            Schema::create('deployment_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('deployment_code')->default('DEP-PROD-141-9942');
                $table->decimal('uptime_percent', 5, 2)->default(99.99);
                $table->string('status')->default('PRODUCTION_DEPLOYMENT_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('deployment_metrics_v2');
    }
};
