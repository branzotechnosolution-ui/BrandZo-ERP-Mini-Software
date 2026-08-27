<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('knowledge_graph_edges')) {
            Schema::create('knowledge_graph_edges', function (Blueprint $table) {
                $table->id();
                $table->string('source_node')->default('Node #8420: Healthcare SDR');
                $table->string('target_node')->default('Node #9942: APAC Growth Opportunity');
                $table->string('relationship_type')->default('DIRECT_REVENUE_EXPANSION_LINK');
                $table->decimal('edge_weight', 5, 2)->default(0.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_graph_edges');
    }
};
