<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('intelligence_fusion_v2')) {
            Schema::create('intelligence_fusion_v2', function (Blueprint $table) {
                $table->id();
                $table->string('fusion_code')->default('FSN-ENG-99420');
                $table->integer('completed_phases_count')->default(160);
                $table->integer('ai_modules_unified_count')->default(140);
                $table->string('status')->default('INTELLIGENCE_FUSION_ENGINE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('intelligence_fusion_v2');
    }
};
