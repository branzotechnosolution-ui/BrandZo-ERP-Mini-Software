<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_cloud_tenants')) {
            Schema::create('enterprise_cloud_tenants', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_name');
                $table->string('cloud_region')->default('us-east-1');
                $table->string('sla_tier')->default('99.999% SLA Enterprise');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_cloud_tenants');
    }
};
