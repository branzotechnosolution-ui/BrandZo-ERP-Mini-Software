<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('strategic_decisions')) {
            Schema::create('strategic_decisions', function (Blueprint $table) {
                $table->id();
                $table->string('decision_title')->default('CEO Advisory: Reinvest .2M into APAC AI SDR Scaling');
                $table->string('strategic_objective')->default('ARR Expansion to ₹22.08 Crores');
                $table->decimal('confidence_score', 5, 2)->default(99.80);
                $table->string('execution_status')->default('AUTONOMOUSLY_EXECUTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('strategic_decisions');
    }
};
