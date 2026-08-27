<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cloud_deployments')) {
            Schema::create('cloud_deployments', function (Blueprint $table) {
                $table->id();
                $table->string('cloud_provider')->default('AWS EKS / GCP GKE / Azure AKS');
                $table->string('cluster_region')->default('us-east-1 / ap-south-1 Multi-Region');
                $table->integer('active_nodes')->default(64);
                $table->string('load_balancer_status')->default('ACTIVE_HEALTHY_CDN_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cloud_deployments');
    }
};
