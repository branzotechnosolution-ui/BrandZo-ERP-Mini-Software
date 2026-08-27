<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('memory_records')) {
            Schema::create('memory_records', function (Blueprint $table) {
                $table->id();
                $table->string('memory_type')->default('ORGANIZATIONAL_DECISION_HISTORY');
                $table->text('memory_summary')->default('Long-term organizational memory tracking 1,420 strategic board decisions across 97 OS evolution phases.');
                $table->decimal('retention_precision', 5, 2)->default(99.98);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('memory_records');
    }
};
