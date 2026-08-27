<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_products_v2')) {
            Schema::create('marketplace_products_v2', function (Blueprint $table) {
                $table->id();
                $table->string('product_code')->default('PROD-COMM-125-9942');
                $table->string('product_name')->default('Enterprise AI Multimodal Superpack');
                $table->decimal('price_usd', 10, 2)->default(1499.00);
                $table->string('status')->default('LIVE_IN_CATALOG');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_products_v2');
    }
};
