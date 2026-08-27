<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_profiles_v2')) {
            Schema::create('partner_profiles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('partner_name')->default('Global Enterprise Reseller Network');
                $table->string('partner_tier')->default('GOLD_CERTIFIED_PARTNER');
                $table->decimal('partnership_prediction_score', 5, 2)->default(98.40);
                $table->string('status')->default('ACTIVE_ALLIANCE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_profiles_v2');
    }
};
