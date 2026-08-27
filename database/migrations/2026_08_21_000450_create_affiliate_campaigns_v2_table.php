<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('affiliate_campaigns_v2')) {
            Schema::create('affiliate_campaigns_v2', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_code')->default('AFF-CMP-2026-9942');
                $table->integer('active_campaigns_count')->default(138);
                $table->string('status')->default('AFFILIATE_TRACKING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('affiliate_campaigns_v2');
    }
};
