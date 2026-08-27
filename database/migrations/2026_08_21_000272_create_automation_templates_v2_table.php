<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('automation_templates_v2')) {
            Schema::create('automation_templates_v2', function (Blueprint $table) {
                $table->id();
                $table->string('template_code')->default('TMPL-WF-115-9942');
                $table->string('title')->default('Autonomous Invoice & GST Reconciliation Workflow');
                $table->integer('published_templates_count')->default(384);
                $table->decimal('rating', 3, 2)->default(4.99);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('automation_templates_v2');
    }
};
