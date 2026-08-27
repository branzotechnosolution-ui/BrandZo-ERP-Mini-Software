<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_ai_modules_v2')) {
            Schema::create('enterprise_ai_modules_v2', function (Blueprint $table) {
                $table->id();
                $table->string('module_code')->default('MOD-ENT-AI-99420');
                $table->integer('connected_modules_count')->default(140);
                $table->decimal('interoperability_score', 5, 2)->default(100.00);
                $table->string('status')->default('ALL_AI_MODULES_FULLY_INTEGRATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_ai_modules_v2');
    }
};
