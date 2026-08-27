<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_business_metrics')) {
            Schema::create('global_business_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('arr_crores', 12, 2)->default(22.08);
                $table->decimal('valuation_usd', 12, 2)->default(284000000.00);
                $table->integer('operating_countries')->default(184);
                $table->integer('active_companies')->default(384);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_business_metrics');
    }
};
