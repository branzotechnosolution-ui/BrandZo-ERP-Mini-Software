<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_search_history')) {
            Schema::create('knowledge_search_history', function (Blueprint $table) {
                $table->id();
                $table->string('search_query');
                $table->integer('results_found')->default(1);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_search_history');
    }
};
