<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_tasks')) {
            Schema::create('ai_tasks', function (Blueprint $table) {
                $table->id();
                $table->string('task_title');
                $table->string('assigned_to_role');
                $table->string('status')->default('In Progress');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_tasks');
    }
};
