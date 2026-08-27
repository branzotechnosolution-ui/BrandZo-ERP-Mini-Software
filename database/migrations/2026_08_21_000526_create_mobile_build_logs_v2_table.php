<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('mobile_build_logs_v2')) {
            Schema::create('mobile_build_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('build_code')->default('BUILD-LOG-99420');
                $table->decimal('build_duration_minutes', 5, 2)->default(4.20);
                $table->string('status')->default('FASTLANE_CICD_SUCCESS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_build_logs_v2');
    }
};
