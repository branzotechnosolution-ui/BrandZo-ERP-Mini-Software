<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('human_ai_collaboration')) {
            Schema::create('human_ai_collaboration', function (Blueprint $table) {
                $table->id();
                $table->string('human_user_email');
                $table->string('ai_employee_role');
                $table->string('collaboration_type')->default('Task Pair');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('human_ai_collaboration');
    }
};
