<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_marketplace')) {
            Schema::create('workflow_marketplace', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_name')->default('Omnichannel Retail Inventory Restock Automation');
                $table->string('author_developer')->default('BrandZo Automation Lab');
                $table->decimal('monthly_subscription_usd', 10, 2)->default(199.00);
                $table->decimal('rating_score', 3, 2)->default(4.99);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_marketplace');
    }
};
