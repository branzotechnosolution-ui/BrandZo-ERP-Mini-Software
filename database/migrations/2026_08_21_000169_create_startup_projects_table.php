<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('startup_projects')) {
            Schema::create('startup_projects', function (Blueprint $table) {
                $table->id();
                $table->string('project_title')->default('MediAI Healthcare Startup Launch');
                $table->string('brand_identity')->default('AI Generated Corporate Brand Assets');
                $table->string('provision_status')->default('100% Auto-Provisioned (CRM, Sales, Billing)');
                $table->integer('ai_agents_assigned')->default(50);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('startup_projects');
    }
};
