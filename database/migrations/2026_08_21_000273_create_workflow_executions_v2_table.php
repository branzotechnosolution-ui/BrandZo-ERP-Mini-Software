<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_executions_v2')) {
            Schema::create('workflow_executions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('execution_code')->default('EXEC-WF-99420');
                $table->integer('steps_completed')->default(8);
                $table->decimal('latency_ms', 5, 2)->default(14.20);
                $table->decimal('success_rate_percent', 5, 2)->default(99.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_executions_v2');
    }
};
