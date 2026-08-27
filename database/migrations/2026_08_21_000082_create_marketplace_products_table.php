<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_products')) {
            Schema::create('marketplace_products', function (Blueprint $table) {
                $table->id();
                $table->string('product_name')->default('Healthcare Enterprise ERP Pack');
                $table->string('category')->default('Industry Solution Pack');
                $table->decimal('price_usd', 10, 2)->default(1499.00);
                $table->string('vendor_name')->default('BrandZo Official Marketplace');
                $table->string('status')->default('Published');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_products');
    }
};
