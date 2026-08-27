<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_performance_logs')) {
            Schema::create('ai_performance_logs', function (Blueprint $table) {
                $table->id();
                $table->string('ai_employee_id');
                $table->integer('tasks_completed_24h')->default(1420);
                $table->decimal('accuracy_score', 5, 2)->default(99.98);
                $table->decimal('roi_ratio', 6, 2)->default(18.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_performance_logs');
    }
};
