<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketing_attribution_v2')) {
            Schema::create('marketing_attribution_v2', function (Blueprint $table) {
                $table->id();
                $table->string('attribution_code')->default('ATT-MTR-2026-9942');
                $table->string('model')->default('MULTI_TOUCH_AI_ATTRIBUTION');
                $table->string('status')->default('MARKETING_ATTRIBUTION_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketing_attribution_v2');
    }
};
