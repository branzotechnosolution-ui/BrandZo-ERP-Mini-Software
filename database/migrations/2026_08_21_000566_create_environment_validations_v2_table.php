<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('environment_validations_v2')) {
            Schema::create('environment_validations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('validation_code')->default('ENV-VAL-164-9942');
                $table->string('environment')->default('LOCAL_REAL_ENVIRONMENT_VALIDATION');
                $table->string('status')->default('REAL_ENVIRONMENT_VALIDATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('environment_validations_v2');
    }
};
