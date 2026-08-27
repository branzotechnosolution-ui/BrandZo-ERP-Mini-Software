<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('supplier_profiles_v2')) {
            Schema::create('supplier_profiles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('supplier_code')->default('SUP-AI-122-9942');
                $table->string('supplier_name')->default('Global Enterprise Chipset Vendor');
                $table->decimal('supplier_score', 5, 2)->default(99.60);
                $table->decimal('on_time_delivery_percent', 5, 2)->default(99.80);
                $table->string('status')->default('GOLD_TIER_SUPPLIER');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('supplier_profiles_v2');
    }
};
