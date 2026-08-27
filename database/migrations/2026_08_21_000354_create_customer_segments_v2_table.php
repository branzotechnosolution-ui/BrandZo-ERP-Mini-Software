<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_segments_v2')) {
            Schema::create('customer_segments_v2', function (Blueprint $table) {
                $table->id();
                $table->string('segment_code')->default('SEG-CRM-2026-9942');
                $table->string('segment_name')->default('Enterprise Healthcare & Fintech Tier');
                $table->decimal('win_probability_percent', 5, 2)->default(94.20);
                $table->string('status')->default('SEGMENT_OPTIMIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_segments_v2');
    }
};
