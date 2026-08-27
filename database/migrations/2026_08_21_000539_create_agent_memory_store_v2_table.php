<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_memory_store_v2')) {
            Schema::create('agent_memory_store_v2', function (Blueprint $table) {
                $table->id();
                $table->string('memory_code')->default('MMR-STR-99420');
                $table->string('type')->default('VECTOR_EMBEDDING_LONGTERM_STORE');
                $table->string('status')->default('AGENT_MEMORY_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_memory_store_v2');
    }
};
