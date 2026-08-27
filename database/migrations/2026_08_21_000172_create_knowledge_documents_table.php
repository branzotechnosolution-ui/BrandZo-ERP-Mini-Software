<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_documents')) {
            Schema::create('knowledge_documents', function (Blueprint $table) {
                $table->id();
                $table->string('document_title')->default('Enterprise Standard Operating Procedure v100.0');
                $table->string('document_category')->default('SOP & Corporate Intelligence');
                $table->integer('knowledge_tokens_indexed')->default(1420000);
                $table->string('indexing_status')->default('100% Vector Indexed');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_documents');
    }
};
