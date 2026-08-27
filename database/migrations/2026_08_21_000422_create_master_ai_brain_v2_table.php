<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('master_ai_brain_v2')) {
            Schema::create('master_ai_brain_v2', function (Blueprint $table) {
                $table->id();
                $table->string('master_brain_code')->default('MASTER-AI-140-9942');
                $table->integer('active_ai_modules_count')->default(140);
                $table->decimal('enterprise_health_score', 5, 2)->default(100.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OPERATING_SYSTEM_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('master_ai_brain_v2');
    }
};
