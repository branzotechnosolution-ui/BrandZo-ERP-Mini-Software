<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_marketplace_products')) {
            Schema::create('partner_marketplace_products', function (Blueprint $table) {
                $table->id();
                $table->string('partner_id');
                $table->string('addon_title')->default('Partner HR Analytics Plugin');
                $table->decimal('commission_rate_percent', 5, 2)->default(30.00);
                $table->string('status')->default('Approved & Live');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_marketplace_products');
    }
};
