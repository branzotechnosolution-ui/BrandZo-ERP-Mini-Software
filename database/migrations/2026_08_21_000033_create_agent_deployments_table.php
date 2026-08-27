<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_deployments')) {
            Schema::create('agent_deployments', function (Blueprint $table) {
                $table->id();
                $table->string('agent_title');
                $table->string('company_tenant_id')->default('TENANT-001');
                $table->string('status')->default('Active Deployment');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_deployments');
    }
};
