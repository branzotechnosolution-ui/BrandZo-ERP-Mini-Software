<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cloud_resources_v2')) {
            Schema::create('cloud_resources_v2', function (Blueprint $table) {
                $table->id();
                $table->string('resource_code')->default('CLOUD-RES-121-9942');
                $table->string('provider')->default('Multi-Cloud (AWS, GCP, Azure)');
                $table->decimal('health_score', 5, 2)->default(100.00);
                $table->string('status')->default('MULTI_CLOUD_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cloud_resources_v2');
    }
};
