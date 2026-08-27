<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('dynamic_pricing_logs_v2')) {
            Schema::create('dynamic_pricing_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('pricing_code')->default('PRICING-AI-2026-9942');
                $table->decimal('margin_boost_percent', 5, 2)->default(38.40);
                $table->string('status')->default('DYNAMIC_PRICING_OPTIMIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('dynamic_pricing_logs_v2');
    }
};
