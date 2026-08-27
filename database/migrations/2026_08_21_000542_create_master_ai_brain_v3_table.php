<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('master_ai_brain_v3')) {
            Schema::create('master_ai_brain_v3', function (Blueprint $table) {
                $table->id();
                $table->string('brain_code')->default('BRN-MST-160-9942');
                $table->string('brain_version')->default('v3.0.0 Final Master Brain');
                $table->string('status')->default('MASTER_AI_BRAIN_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('master_ai_brain_v3');
    }
};
