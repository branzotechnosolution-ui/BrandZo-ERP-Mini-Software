<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_department_assignments')) {
            Schema::create('ai_department_assignments', function (Blueprint $table) {
                $table->id();
                $table->string('department_name')->default('Global Sales & Growth');
                $table->integer('assigned_agents')->default(184000);
                $table->string('head_ai_agent')->default('AI-CEO-EXECUTIVE-01');
                $table->string('status')->default('FULLY_STAFFED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_department_assignments');
    }
};
