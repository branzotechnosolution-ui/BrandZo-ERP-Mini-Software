<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_opportunities')) {
            Schema::create('revenue_opportunities', function (Blueprint $table) {
                $table->id();
                $table->string('opportunity_title')->default('APAC Healthcare Enterprise Expansion');
                $table->decimal('potential_arr_usd', 12, 2)->default(4800000.00);
                $table->string('automation_status')->default('AI Negotiated & Auto-Provisioned');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_opportunities');
    }
};
