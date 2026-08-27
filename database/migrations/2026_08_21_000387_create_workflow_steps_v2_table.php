<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_steps_v2')) {
            Schema::create('workflow_steps_v2', function (Blueprint $table) {
                $table->id();
                $table->string('step_code')->default('STP-WF-99420');
                $table->integer('total_steps_executed')->default(184000);
                $table->decimal('automation_rate_percent', 5, 2)->default(99.98);
                $table->string('status')->default('STEP_EXECUTION_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_steps_v2');
    }
};
