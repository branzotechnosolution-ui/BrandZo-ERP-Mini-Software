<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_builds')) {
            Schema::create('developer_builds', function (Blueprint $table) {
                $table->id();
                $table->string('build_id')->default('BUILD-v4.2-8492');
                $table->string('app_id')->default('APP-MKT-520');
                $table->string('status')->default('AUTO_TESTS_PASSED_APPROVED');
                $table->decimal('code_quality_score', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_builds');
    }
};
