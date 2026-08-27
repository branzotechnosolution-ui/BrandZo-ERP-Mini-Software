<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('production_deployments_v2')) {
            Schema::create('production_deployments_v2', function (Blueprint $table) {
                $table->id();
                $table->string('deployment_code')->default('PROD-DPL-151-9942');
                $table->decimal('uptime_sla_percent', 5, 3)->default(99.999);
                $table->string('status')->default('PRODUCTION_DEPLOYMENT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('production_deployments_v2');
    }
};
