<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_departments')) {
            Schema::create('ai_departments', function (Blueprint $table) {
                $table->id();
                $table->string('department_name')->default('AI Autonomous Operations');
                $table->string('head_ai_agent')->default('AI COO 2.0 Agent');
                $table->integer('ai_headcount')->default(520000);
                $table->decimal('productivity_index', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_departments');
    }
};
