<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('automated_decisions_v2')) {
            Schema::create('automated_decisions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('decision_code')->default('DEC-AUTO-84920');
                $table->string('title')->default('Reallocate 4 Developer Agents to Milestone 3');
                $table->decimal('confidence_score', 5, 2)->default(99.80);
                $table->string('governance_status')->default('EXPLAINABLE_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('automated_decisions_v2');
    }
};
