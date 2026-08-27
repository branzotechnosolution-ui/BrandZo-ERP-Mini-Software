<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('deployment_preparations_v2')) {
            Schema::create('deployment_preparations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prep_code')->default('DEP-PRP-165-9942');
                $table->string('environment')->default('PRODUCTION_DEPLOYMENT_PREPARATION');
                $table->string('status')->default('DEPLOYMENT_PREPARATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('deployment_preparations_v2');
    }
};
