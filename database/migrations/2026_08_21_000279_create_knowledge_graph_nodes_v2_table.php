<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_graph_nodes_v2')) {
            Schema::create('knowledge_graph_nodes_v2', function (Blueprint $table) {
                $table->id();
                $table->string('graph_code')->default('GRAPH-NODES-99420');
                $table->bigInteger('entities_count')->default(520000000);
                $table->decimal('graph_traversal_ms', 5, 2)->default(1.42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_graph_nodes_v2');
    }
};
