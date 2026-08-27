<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('brand_intelligence_v2')) {
            Schema::create('brand_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('brand_code')->default('BRD-INT-99420');
                $table->decimal('global_brand_score', 5, 2)->default(99.80);
                $table->string('status')->default('BRAND_INTELLIGENCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('brand_intelligence_v2');
    }
};
