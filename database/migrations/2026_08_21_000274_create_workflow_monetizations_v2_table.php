<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_monetizations_v2')) {
            Schema::create('workflow_monetizations_v2', function (Blueprint $table) {
                $table->id();
                $table->decimal('marketplace_gmv_usd', 15, 2)->default(14200000.00);
                $table->string('revenue_share_model')->default('70% Creator / 30% BrandZo');
                $table->decimal('creator_payouts_usd', 15, 2)->default(9940000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_monetizations_v2');
    }
};
