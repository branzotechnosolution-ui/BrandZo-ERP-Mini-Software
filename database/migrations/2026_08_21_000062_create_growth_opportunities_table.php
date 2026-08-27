<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('growth_opportunities')) {
            Schema::create('growth_opportunities', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name');
                $table->string('opportunity_type')->default('Enterprise Upsell Proposal');
                $table->decimal('potential_arr_delta', 12, 2)->default(184000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('growth_opportunities');
    }
};
