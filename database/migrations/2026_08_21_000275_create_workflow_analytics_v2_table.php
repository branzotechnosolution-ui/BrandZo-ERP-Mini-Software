<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_analytics_v2')) {
            Schema::create('workflow_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->integer('monthly_hours_saved_thousands')->default(3840);
                $table->decimal('automation_roi_multiplier', 5, 2)->default(18.40);
                $table->integer('active_workflows_count')->default(18400);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_analytics_v2');
    }
};
