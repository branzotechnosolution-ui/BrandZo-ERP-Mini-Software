<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('product_licenses')) {
            Schema::create('product_licenses', function (Blueprint $table) {
                $table->id();
                $table->string('license_key');
                $table->string('pack_name')->default('Healthcare ERP Pack');
                $table->string('status')->default('Active');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('product_licenses');
    }
};
