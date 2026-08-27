<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_region_pricings')) {
            Schema::create('global_region_pricings', function (Blueprint $table) {
                $table->id();
                $table->string('region_code')->default('IN / US / EU / SEA');
                $table->string('currency')->default('INR / USD / EUR');
                $table->decimal('monthly_price', 12, 2)->default(14999.00);
                $table->decimal('tax_rate_percent', 5, 2)->default(18.00);
                $table->string('status')->default('Active');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_region_pricings');
    }
};
