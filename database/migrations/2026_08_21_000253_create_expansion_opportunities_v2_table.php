<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('expansion_opportunities_v2')) {
            Schema::create('expansion_opportunities_v2', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name')->default('Apollo Healthcare Enterprise Tier');
                $table->decimal('opportunity_arr_usd', 12, 2)->default(14200000.00);
                $table->string('recommended_feature')->default('AI Workforce 3.0 Unlimited Node Expansion');
                $table->string('status')->default('HIGH_INTENT_UPGRADE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('expansion_opportunities_v2');
    }
};
