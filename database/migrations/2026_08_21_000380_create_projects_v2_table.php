<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('projects_v2')) {
            Schema::create('projects_v2', function (Blueprint $table) {
                $table->id();
                $table->string('project_code')->default('PRJ-ENT-133-9942');
                $table->string('title')->default('Global Multimodal Enterprise ERP Expansion');
                $table->integer('active_projects_count')->default(384);
                $table->string('status')->default('AI_PROJECT_PLANNING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('projects_v2');
    }
};
