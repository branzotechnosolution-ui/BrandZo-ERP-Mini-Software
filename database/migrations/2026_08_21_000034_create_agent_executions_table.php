<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_executions')) {
            Schema::create('agent_executions', function (Blueprint $table) {
                $table->id();
                $table->string('agent_name');
                $table->string('task_performed');
                $table->decimal('execution_time_ms', 10, 2)->default(14.20);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_executions');
    }
};
