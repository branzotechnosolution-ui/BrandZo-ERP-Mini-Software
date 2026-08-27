<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('acquisition_targets')) {
            Schema::create('acquisition_targets', function (Blueprint $table) {
                $table->id();
                $table->string('target_company')->default('BioHealth AI Analytics Ltd');
                $table->decimal('valuation_est_usd', 12, 2)->default(14200000.00);
                $table->string('strategic_fit')->default('Synergistic Vector Memory & Healthcare Data Pipeline');
                $table->string('status')->default('RECOMMENDED_M_AND_A');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('acquisition_targets');
    }
};
