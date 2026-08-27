<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_nodes')) {
            Schema::create('knowledge_nodes', function (Blueprint $table) {
                $table->id();
                $table->string('node_label')->default('Node #8420: Healthcare AI SDR Workflow');
                $table->string('node_type')->default('ENTERPRISE_CONCEPT');
                $table->decimal('relevance_score', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_nodes');
    }
};
