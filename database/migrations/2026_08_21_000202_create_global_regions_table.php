<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_regions')) {
            Schema::create('global_regions', function (Blueprint $table) {
                $table->id();
                $table->string('region_code')->default('APAC-SOUTH-1 / US-EAST-1 / EU-CENTRAL-1');
                $table->string('region_name')->default('Asia Pacific & India Enterprise Hub');
                $table->integer('active_nodes')->default(64);
                $table->string('status')->default('ACTIVE_MULTI_REGION_DEPLOYED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_regions');
    }
};
