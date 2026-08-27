<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('investor_profiles')) {
            Schema::create('investor_profiles', function (Blueprint $table) {
                $table->id();
                $table->string('vc_firm_name')->default('Sequoia Capital / Accel Partners');
                $table->string('investment_stage')->default('Series B / Growth Equity');
                $table->decimal('funding_probability_percent', 5, 2)->default(98.40);
                $table->string('status')->default('TIER_1_MATCHED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('investor_profiles');
    }
};
