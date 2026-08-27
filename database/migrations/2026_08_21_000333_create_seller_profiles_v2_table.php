<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('seller_profiles_v2')) {
            Schema::create('seller_profiles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('seller_code')->default('SELLER-AI-99420');
                $table->string('merchant_name')->default('Global Enterprise Merchant Network');
                $table->decimal('seller_score', 5, 2)->default(99.60);
                $table->string('status')->default('VERIFIED_MERCHANT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('seller_profiles_v2');
    }
};
