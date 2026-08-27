<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('task_intelligence_logs')) {
            Schema::create('task_intelligence_logs', function (Blueprint $table) {
                $table->id();
                $table->string('task_id');
                $table->string('assigned_type')->default('Human + AI Employee Pair');
                $table->integer('priority_score')->default(99);
                $table->string('deadline_risk')->default('Zero Risk');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('task_intelligence_logs');
    }
};
