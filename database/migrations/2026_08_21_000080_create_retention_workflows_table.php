<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('retention_workflows')) {
            Schema::create('retention_workflows', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_name')->default('Churn Prevention & NRR Booster');
                $table->string('trigger_condition')->default('Inactivity > 14 days');
                $table->string('automated_action')->default('Trigger Customer Success AI Call & Offer Upgrade');
                $table->decimal('retention_rate_boost', 5, 2)->default(99.58);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('retention_workflows');
    }
};
