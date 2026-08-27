<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('published_workflows_v2')) {
            Schema::create('published_workflows_v2', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_code')->default('PUB-WF-2026-9942');
                $table->string('title')->default('APAC Healthcare Enterprise SDR Workflow');
                $table->string('category')->default('Sales & Revenue Growth');
                $table->string('status')->default('PUBLISHED_LIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('published_workflows_v2');
    }
};
