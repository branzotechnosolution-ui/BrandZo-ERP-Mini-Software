<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('encryption_validation_v2')) {
            Schema::create('encryption_validation_v2', function (Blueprint $table) {
                $table->id();
                $table->string('encryption_code')->default('ENC-VAL-99420');
                $table->string('standard')->default('AES-256-GCM_REST_AND_TRANSIT_ENCRYPTED');
                $table->string('status')->default('ENCRYPTION_CERTIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('encryption_validation_v2');
    }
};
