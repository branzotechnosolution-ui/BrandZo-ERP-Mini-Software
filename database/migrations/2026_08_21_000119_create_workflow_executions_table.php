<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_executions')) {
            Schema::create('workflow_executions', function (Blueprint $table) {
                $table->id();
                $table->string('execution_id')->default('EXEC-WF-84920');
                $table->string('workflow_id');
                $table->decimal('latency_ms', 8, 2)->default(14.20);
                $table->string('status')->default('Success (0 Bottlenecks)');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_executions');
    }
};
