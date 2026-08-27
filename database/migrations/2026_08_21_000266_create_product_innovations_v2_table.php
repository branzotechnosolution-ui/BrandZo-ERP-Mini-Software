<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('product_innovations_v2')) {
            Schema::create('product_innovations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('innovation_code')->default('INV-PROD-114-9942');
                $table->string('title')->default('Autonomous Multimodal AI Agent Network Core');
                $table->decimal('adoption_forecast_percent', 5, 2)->default(99.80);
                $table->string('status')->default('SHIPPED_TO_PRODUCTION');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('product_innovations_v2');
    }
};
