<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('expansion_targets_v2')) {
            Schema::create('expansion_targets_v2', function (Blueprint $table) {
                $table->id();
                $table->string('region_target')->default('APAC & ME-South Enterprise Scaling Hub');
                $table->decimal('pipeline_arr_target_usd', 15, 2)->default(48400000.00);
                $table->string('readiness_status')->default('100% DEPLOYED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('expansion_targets_v2');
    }
};
