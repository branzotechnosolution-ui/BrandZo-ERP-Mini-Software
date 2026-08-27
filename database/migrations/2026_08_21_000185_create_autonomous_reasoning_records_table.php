<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_reasoning_records')) {
            Schema::create('autonomous_reasoning_records', function (Blueprint $table) {
                $table->id();
                $table->string('reasoning_context')->default('Cross-Module ERP/CRM/Finance State Synthesis');
                $table->decimal('reasoning_latency_ms', 6, 2)->default(1.42);
                $table->decimal('accuracy_score', 5, 2)->default(99.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_reasoning_records');
    }
};
