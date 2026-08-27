<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('deployment_logs_v2')) {
            Schema::create('deployment_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('deploy_code')->default('DEPLOY-BZ-99420');
                $table->string('version')->default('v121.0.0-PROD');
                $table->decimal('release_risk_score', 4, 2)->default(0.01);
                $table->string('downtime_status')->default('ZERO_DOWNTIME_DEPLOYED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('deployment_logs_v2');
    }
};
