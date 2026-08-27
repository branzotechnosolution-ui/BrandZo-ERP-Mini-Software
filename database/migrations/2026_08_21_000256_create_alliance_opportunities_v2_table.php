<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('alliance_opportunities_v2')) {
            Schema::create('alliance_opportunities_v2', function (Blueprint $table) {
                $table->id();
                $table->string('alliance_name')->default('Salesforce + BrandZo Co-Selling Alliance');
                $table->decimal('forecast_revenue_usd', 15, 2)->default(48400000.00);
                $table->string('opportunity_type')->default('ENTERPRISE_CO_SELLING');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('alliance_opportunities_v2');
    }
};
