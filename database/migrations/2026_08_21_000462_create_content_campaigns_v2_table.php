<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('content_campaigns_v2')) {
            Schema::create('content_campaigns_v2', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_code')->default('CNT-CMP-2026-9942');
                $table->integer('published_blogs_count')->default(1840);
                $table->string('status')->default('CONTENT_MARKETING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('content_campaigns_v2');
    }
};
