<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_documents_v2')) {
            Schema::create('knowledge_documents_v2', function (Blueprint $table) {
                $table->id();
                $table->string('doc_code')->default('DOC-KNW-131-9942');
                $table->string('title')->default('Global Enterprise AI SOP & Compliance Manual');
                $table->integer('indexed_pages')->default(1420);
                $table->string('status')->default('INDEXED_IN_GRAPH_BRAIN');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_documents_v2');
    }
};
