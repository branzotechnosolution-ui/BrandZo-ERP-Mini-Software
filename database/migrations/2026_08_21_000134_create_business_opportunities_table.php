<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_opportunities')) {
            Schema::create('business_opportunities', function (Blueprint $table) {
                $table->id();
                $table->string('opportunity_title')->default('APAC Healthcare AI Expansion Deal');
                $table->string('target_sector')->default('Telemedicine & Hospital Chains');
                $table->decimal('opportunity_score', 5, 2)->default(98.40);
                $table->decimal('estimated_arr_usd', 12, 2)->default(4800000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_opportunities');
    }
};
