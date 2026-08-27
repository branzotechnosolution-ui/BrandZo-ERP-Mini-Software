<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_executives')) {
            Schema::create('autonomous_executives', function (Blueprint $table) {
                $table->id();
                $table->string('executive_role')->default('AI CEO & Operations Engine');
                $table->string('assigned_agent')->default('AI Agent #CEO-100');
                $table->decimal('decision_precision', 5, 2)->default(99.60);
                $table->string('status')->default('AUTONOMOUS_EXECUTION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_executives');
    }
};
