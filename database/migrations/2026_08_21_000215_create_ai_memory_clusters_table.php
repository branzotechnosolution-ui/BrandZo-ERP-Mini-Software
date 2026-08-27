<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_memory_clusters')) {
            Schema::create('ai_memory_clusters', function (Blueprint $table) {
                $table->id();
                $table->string('cluster_name')->default('Pinecone-Milvus-Hybrid-Vector-01');
                $table->bigInteger('vector_count')->default(520000000);
                $table->decimal('search_latency_ms', 5, 2)->default(1.42);
                $table->string('status')->default('HEALTHY_INDEXED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_memory_clusters');
    }
};
