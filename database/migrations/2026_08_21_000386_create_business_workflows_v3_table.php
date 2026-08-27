<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_workflows_v3')) {
            Schema::create('business_workflows_v3', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_code')->default('WF-ENT-134-9942');
                $table->string('title')->default('Autonomous Enterprise Process Mapping & Orchestration');
                $table->integer('active_workflows_count')->default(18400);
                $table->string('status')->default('WORKFLOW_DESIGNER_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_workflows_v3');
    }
};
