<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_launch_metrics_v2')) {
            Schema::create('global_launch_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('launch_code')->default('GLOB-LNC-150-9942');
                $table->integer('sovereign_countries_count')->default(195);
                $table->string('status')->default('GLOBAL_LAUNCH_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_launch_metrics_v2');
    }
};
