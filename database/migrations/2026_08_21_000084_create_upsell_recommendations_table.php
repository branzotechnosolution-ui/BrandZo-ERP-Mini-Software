<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('upsell_recommendations')) {
            Schema::create('upsell_recommendations', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_slug');
                $table->string('recommended_addon')->default('AI SDR Workforce 2.0 Add-on');
                $table->decimal('potential_arr_usd', 10, 2)->default(4800.00);
                $table->integer('confidence_score')->default(96);
                $table->string('status')->default('Recommended');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('upsell_recommendations');
    }
};
