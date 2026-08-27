<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_relationships')) {
            Schema::create('knowledge_relationships', function (Blueprint $table) {
                $table->id();
                $table->string('source_node');
                $table->string('target_node');
                $table->string('relation_type');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_relationships');
    }
};
