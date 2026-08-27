<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_module_loader_checks_v2')) {
            Schema::create('ai_module_loader_checks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('module_check_code')->default('MOD-LDR-2026-9942');
                $table->integer('active_ai_modules_count')->default(140);
                $table->string('status')->default('ALL_AI_MODULES_LOADED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_module_loader_checks_v2');
    }
};
