<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_integrations')) {
            Schema::create('marketplace_integrations', function (Blueprint $table) {
                $table->id();
                $table->string('title')->default('Shopify / WooCommerce Omnichannel Sync');
                $table->string('developer_name')->default('BrandZo Ecosystem Partner');
                $table->decimal('monthly_price_usd', 10, 2)->default(149.00);
                $table->decimal('rating_score', 3, 2)->default(4.99);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_integrations');
    }
};
