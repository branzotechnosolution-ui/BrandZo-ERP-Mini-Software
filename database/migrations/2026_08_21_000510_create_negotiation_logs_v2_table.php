<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('negotiation_logs_v2')) {
            Schema::create('negotiation_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('negotiation_code')->default('NEG-LOG-2026-9942');
                $table->string('strategy')->default('DYNAMIC_AI_DISCOUNT_BOUNDARIES');
                $table->string('status')->default('NEGOTIATION_INTELLIGENCE_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('negotiation_logs_v2');
    }
};
