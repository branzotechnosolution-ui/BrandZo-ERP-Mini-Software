<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cloud_nodes_v2')) {
            Schema::create('cloud_nodes_v2', function (Blueprint $table) {
                $table->id();
                $table->string('node_code')->default('CLOUD-NOD-156-9942');
                $table->integer('global_regions_count')->default(24);
                $table->integer('active_nodes_count')->default(1420);
                $table->string('status')->default('MULTI_REGION_CLOUD_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cloud_nodes_v2');
    }
};
